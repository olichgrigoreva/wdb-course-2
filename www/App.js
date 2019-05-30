export default class Hello extends React.Component {
    
/* $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}); */
    
    render() {
        return <div class="container-fluid">
                <div class="row d-flex p-3">
                    
                    <div class="col-sm-3 col-md-3 col-lg-3 p-2">
                        <strong>note_sidebar</strong>
                        <input class="form-control" id="myInput" type="text" placeholder="Search.."></input>

                        <ul class="list-group" id="myList">
                            <li class="list-group-item">First item</li>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Fourth</li>
                        </ul>
                        <br></br>  
                    </div>


                    <div class="col-sm-9 col-md-9 col-lg-9 p-2">
                    <strong>note_content</strong> 
                    </div>

                </div>
            </div>;
    }
}