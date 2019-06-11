export default class Hello extends React.Component {
    
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
      return <div class="container-fluid">
              <div class="row p-3 workarea">
                  
                <div class="d-flex flex-column justify-content-between col-sm-3 col-md-3 col-lg-3 p-2 note_sidebar">
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
                </div>


                <div class="col-sm-9 col-md-9 col-lg-9 p-2">
                  
                  <div class="note_content d-flex">
                    <div class="note_content_title p-2 mr-auto">
                      <strong>note_Name</strong> 
                    </div>

                    <div class="note_content_date p-2 ml-auto">
                    <strong>date</strong>
                    </div>
                  </div>

                  <hr align="center" color="#dddddd"></hr>
                  
                  <div class="d-flex flex-column form-group">
                    <input class="form-control note_name_input" id="note_name" type="text" placeholder="Enter note name"></input>
                    <input class="form-control note_name_input" id="note_name" type="date" placeholder="Enter note name"  min="2019-01-01"></input>
                    <textarea id="note_description" class="form-control" rows="12"></textarea>

                    <button class="btn btn-primary save_note_button align-self-center">Save</button>
                    
                  </div>
                  

                </div>

              </div>
          </div>;
    }
}