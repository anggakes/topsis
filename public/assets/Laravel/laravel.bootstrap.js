
/* refreshing remote bootstrap modal*/

      function refreshModal(loading){

          $(document.body).on('hidden.bs.modal', function () {
              $('.modal-content').html("<div class='modal-body'>"+loading+"</div>");
              $('#myModal').removeData('bs.modal')
          });
      }
