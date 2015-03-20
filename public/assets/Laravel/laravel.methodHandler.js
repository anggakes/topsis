 function handleMethod(e , here) {
      var link = here;
      var httpMethod = link.data('method').toUpperCase();
      var form;
 
      // If the data-method attribute is not PUT or DELETE,
      // then we don't know what to do. Just ignore.
      if ( $.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
        return;
      }
 
      // Allow user to optionally provide data-confirm="Are you sure?"
      if ( link.data('confirm') ) {
        if ( ! verifyConfirm(link) ) {
          return false;
        }else{
           form = createForm(link);
           form.submit();
        }
      }
 
     
      e.preventDefault();
    }
 
    function verifyConfirm(link) {
      return confirm(link.data('confirm'));
    }
 
  function createForm (link) {
      var form = 
      $('<form>', {
        'method': 'POST',
        'action': link.attr('href')
      });
 
      var token = 
      $('<input>', {
        'type': 'hidden',
        'name': 'csrf_token',
          'value': '<?php echo csrf_token(); ?>' // hmmmm...
        });
 
      var hiddenInput =
      $('<input>', {
        'name': '_method',
        'type': 'hidden',
        'value': link.data('method')
      });
 
      return form.append(token, hiddenInput)
                 .appendTo('body');
    }

 