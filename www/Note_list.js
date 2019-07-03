export default class Note_list extends React.Component {
    
    /*   <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
      </script>  */
        
        render() {
          return <div class="d-flex flex-column justify-content-between col-sm-3 col-md-3 col-lg-3 p-2 note_sidebar">
                      <div>
                        <input class="form-control search_input" id="myInput" type="text" placeholder="Search note"></input>
                      </div>
    
                      <div class="note_list flex-grow-1">
                        <table class="table table-striped table-hover table-sm" id="myList">
                          <tbody>
                            <tr class="d-flex">
                              <div class="note_row_icon text-center align-self-center">&gt;</div>
                              <td class="flex-grow-1">First item</td>
                              <div class="note_row_icon text-center align-self-center">&#128393;</div>
                              <div class="note_row_icon text-center align-self-center">&times;</div>
                            </tr>
                            <tr class="d-flex">
                              <div class="note_row_icon text-center align-self-center"></div>
                              <td class="flex-grow-1">First item</td>
                              <div class="note_row_icon text-center align-self-center">&#128393;</div>
                              <div class="note_row_icon text-center align-self-center">&times;</div>
                            </tr>
                      
                          </tbody>
                        </table>
                      </div>
    
                      <button class="btn btn-primary btn-block add_note_button">Add new note</button>
                    </div>;
                }
    }