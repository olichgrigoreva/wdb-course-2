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
              <div class="d-flex p-3">
                  
                <div class="col-sm-3 col-md-3 col-lg-3 p-2 note_sidebar">
                    <input class="form-control search_input" id="myInput" type="text" placeholder="Search note"></input>

                    <table class="table table-striped table-hover table-sm" id="myList">
                    <tbody>
                      <tr>
                        <td>First item</td>
                      </tr>
                      <tr>
                        <td>Second item</td>
                      </tr>
                      <tr>
                        <td>Third item</td>
                      </tr>
                      <tr>
                        <td>Fourth</td>
                      </tr>                     
                    </tbody>
                    </table>
                    <br></br>
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