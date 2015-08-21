function parse_url(str, component) {
  //       discuss at: http://phpjs.org/functions/parse_url/
  //      original by: Steven Levithan (http://blog.stevenlevithan.com)
  var query, key = ['source', 'scheme', 'authority', 'userInfo', 'user', 'pass', 'host', 'port',
      'relative', 'path', 'directory', 'file', 'query', 'fragment'
    ],
    ini = (this.php_js && this.php_js.ini) || {},
    mode = (ini['phpjs.parse_url.mode'] &&
      ini['phpjs.parse_url.mode'].local_value) || 'php',
    parser = {
      php: /^(?:([^:\/?#]+):)?(?:\/\/()(?:(?:()(?:([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?()(?:(()(?:(?:[^?#\/]*\/)*)()(?:[^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
      strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
      loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/\/?)?((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/ // Added one optional slash to post-scheme to catch file:/// (should restrict this)
    };

  var m = parser[mode].exec(str),
    uri = {},
    i = 14;
  while (i--) {
    if (m[i]) {
      uri[key[i]] = m[i];
    }
  }

  if (component) {
    return uri[component.replace('PHP_URL_', '')
      .toLowerCase()];
  }
  if (mode !== 'php') {
    var name = (ini['phpjs.parse_url.queryKey'] &&
      ini['phpjs.parse_url.queryKey'].local_value) || 'queryKey';
    parser = /(?:^|&)([^&=]*)=?([^&]*)/g;
    uri[name] = {};
    query = uri[key[12]] || '';
    query.replace(parser, function($0, $1, $2) {
      if ($1) {
        uri[name][$1] = $2;
      }
    });
  }
  delete uri.source;
  return uri;
}
function parse_str(str, array) {
  //       discuss at: http://phpjs.org/functions/parse_str/
  //      original by: Cagri Ekin
  var strArr = String(str)
    .replace(/^&/, '')
    .replace(/&$/, '')
    .split('&'),
    sal = strArr.length,
    i, j, ct, p, lastObj, obj, lastIter, undef, chr, tmp, key, value,
    postLeftBracketPos, keys, keysLen,
    fixStr = function(str) {
      return decodeURIComponent(str.replace(/\+/g, '%20'));
    };

  if (!array) {
    array = this.window;
  }

  for (i = 0; i < sal; i++) {
    tmp = strArr[i].split('=');
    key = fixStr(tmp[0]);
    value = (tmp.length < 2) ? '' : fixStr(tmp[1]);

    while (key.charAt(0) === ' ') {
      key = key.slice(1);
    }
    if (key.indexOf('\x00') > -1) {
      key = key.slice(0, key.indexOf('\x00'));
    }
    if (key && key.charAt(0) !== '[') {
      keys = [];
      postLeftBracketPos = 0;
      for (j = 0; j < key.length; j++) {
        if (key.charAt(j) === '[' && !postLeftBracketPos) {
          postLeftBracketPos = j + 1;
        } else if (key.charAt(j) === ']') {
          if (postLeftBracketPos) {
            if (!keys.length) {
              keys.push(key.slice(0, postLeftBracketPos - 1));
            }
            keys.push(key.substr(postLeftBracketPos, j - postLeftBracketPos));
            postLeftBracketPos = 0;
            if (key.charAt(j + 1) !== '[') {
              break;
            }
          }
        }
      }
      if (!keys.length) {
        keys = [key];
      }
      for (j = 0; j < keys[0].length; j++) {
        chr = keys[0].charAt(j);
        if (chr === ' ' || chr === '.' || chr === '[') {
          keys[0] = keys[0].substr(0, j) + '_' + keys[0].substr(j + 1);
        }
        if (chr === '[') {
          break;
        }
      }

      obj = array;
      for (j = 0, keysLen = keys.length; j < keysLen; j++) {
        key = keys[j].replace(/^['"]/, '')
          .replace(/['"]$/, '');
        lastIter = j !== keys.length - 1;
        lastObj = obj;
        if ((key !== '' && key !== ' ') || j === 0) {
          if (obj[key] === undef) {
            obj[key] = {};
          }
          obj = obj[key];
        } else { // To insert new dimension
          ct = -1;
          for (p in obj) {
            if (obj.hasOwnProperty(p)) {
              if (+p > ct && p.match(/^\d+$/g)) {
                ct = +p;
              }
            }
          }
          key = ct + 1;
        }
      }
      lastObj[key] = value;
    }
  }
}

function set_source(val)
{
    var input = document.getElementById('utm_source');
    if (input)
        input.value = val;
}

function set_medium(val)
{
    var input = document.getElementById('utm_medium');
    if (input)
        input.value = val;
}

function set_campaign(val)
{
    var input = document.getElementById('utm_campaign');
    if (input)
        input.value = val;
}

function button_click(type)
{
    var form = document.getElementById('form_submit');
    if (!form) return false;

    var input_type = document.getElementById('type');
    if (input_type)
        input_type.value = type;

    form.submit();
    document.getElementById('input_email').value='';

    if (!placeholder_is_enabled()) {
        var input = document.getElementById('input_email');
        input.value = input.getAttribute('placeholder');
        input.className = 'message_input message_placeholder';
    }

    return false;
}

function placeholder_is_enabled()
{
    var test = document.createElement('input');
    return ('placeholder' in test);
}

function init_url()
{
    var uri = window.location.href,
        input_url = document.getElementById('input_url');

    if (!uri || !input_url) return;

    uri_params = parse_url(uri);
    if (!uri_params || !uri_params.query) return;

    var get_params = {};
    parse_str(uri_params.query, get_params);

    if (!get_params) return;

    if (get_params.burl) {
        input_url.value = get_params.burl;
    }
}

function init_elements()
{
    var btn_public = document.getElementById('btn_public'),
        btn_private = document.getElementById('btn_private');

    if (btn_public)
        btn_public.onclick=function(){button_click('public');return false;};
    if (btn_private)
        btn_private.onclick=function(){button_click('private');return false;};
}

function show_template(container_id, tpl_id, url)
{
    var container = document.getElementById(container_id),
        tpl = document.getElementById(tpl_id);

    if (!container || !tpl) return false;

    var html = tpl.innerHTML.replace('<!--', '').replace('-->', '');
    if (url) {
        url = url.replace(/</g, '').replace(/>/g, '').replace('http://', '').replace('https://', '');
        if (url.length > 31)
            url = url.substr(0, 31);

        if (url.substr(url.length - 1, 1) == '/')
            url = url.substr(0, url.length - 1);

        html = html.replace(/URL/, url);
    }
    container.innerHTML = html;

    return true;
}

function init_view()
{
    var url_el = document.getElementById('input_url');
    var burl = (url_el && url_el.value) ? url_el.value : '';

    if (window.full_version && burl && burl.indexOf('rss2search.com') == -1) {
        var rand = Math.random();

        if (rand < 0.33) {
            if (show_template('main_container', 'tpl_v3'))
                set_source('hsswidgetv3full');
        } else if (rand < 0.66) {
            if (show_template('main_container', 'tpl_v6', burl))
                set_source('hsswidgetv6full');
        } else {
            var url_input = document.getElementById('breaking_news_url');

            if (url_input && url_input.value) {
                url_el.value = url_input.value;
                if (show_template('main_container', 'tpl_v7'))
                    set_source('hsswidgetv7full');
            }
        }
    } else {
        var url_input = document.getElementById('breaking_news_url');

        if (url_input && url_input.value) {
            url_el.value = url_input.value;
            if (show_template('main_container', 'tpl_v7'))
                set_source('hsswidgetv7');
        } 
    }
}

function init_view_168x90()
{
    var url_el = document.getElementById('input_url');
    var burl = (url_el && url_el.value) ? url_el.value : '';

    var rand = Math.random();

    if (rand < 0) {
        //default
    } else {
        var url_input = document.getElementById('breaking_news_url');

        if (url_input && url_input.value) {
            url_el.value = url_input.value;
            if (show_template('main_container', 'tpl_v2'))
                set_source('hssrightwidgetv2');
        }
    }
}

function init_view_435x95()
{
    var url_el = document.getElementById('input_url');
    var burl = (url_el && url_el.value) ? url_el.value : '';

    var rand = Math.random();

    if (rand < 0.5) {
        var url_input = document.getElementById('breaking_news_url');
        
        if (url_input && url_input.value) {
            url_el.value = url_input.value;
            if (show_template('main_container', 'tpl_v2'))
                set_source('hssuiwidgetv2'); 
        }       
    } else {
        var url_input = document.getElementById('breaking_news_url');
        
        if (url_input && url_input.value) {
            url_el.value = url_input.value;
            if (show_template('main_container', 'tpl_v3'))
                set_source('hssuiwidgetv2.2'); 
        }
    }
}

function init_placeholders()
{
    if (placeholder_is_enabled()) return;

    var input = document.getElementById('input_email');

    if (input && input.getAttribute('placeholder')) {
        input.onblur = function() {
            if (this.value == '' || input.value == input.getAttribute('placeholder')) {
                this.value = this.getAttribute('placeholder');
                this.className = 'message_input message_placeholder';
            }
        };

        input.onfocus = function() {
            this.className = 'message_input';
            if (this.value == this.getAttribute('placeholder'))
                this.value = '';
        };

        if (input.value == '' || input.value == input.getAttribute('placeholder')) {
            input.value = input.getAttribute('placeholder');
            input.className = 'message_input message_placeholder';
        };
    }
}

function init()
{
    init_url();

    init_view();

    init_elements();

    init_placeholders();
}

function init_168x90()
{
    init_url();

    init_view_168x90();

    init_elements();

    init_placeholders();
}

function init_435x95()
{
    init_url();

    init_view_435x95();

    init_elements();

    init_placeholders();
}

