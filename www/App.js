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
                      <tr>
                        <div>&gt;</div>
                        <td>First item</td>
                        <div>&#128393;</div>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Second item</td>
                        <img src="pencil.png"></img>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Third item</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>
                      <tr>
                        <div></div>
                        <td>Fourth</td>
                        <div>&times;</div>
                      </tr>

                 
                    </tbody>
                    </table>
                  </div>

                  <button class="btn btn-primary btn-block add_button">Add new note</button>
                </div>


                <div class="col-sm-9 col-md-9 col-lg-9 p-2">
                  <div class="d-flex">
                    
                    <div class="p-2 mr-auto">
                      <strong>note_Name</strong> 
                    </div>

                    <div class="p-2 ml-auto">
                    <strong>date</strong>
                    </div>

                  </div>
                  <hr align="center" color="#dddddd"></hr>
                  <div>
                    Content
                  </div>
                  

                </div>

              </div>
          </div>;
    }
}