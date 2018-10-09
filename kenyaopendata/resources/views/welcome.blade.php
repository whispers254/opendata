<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OPEN DATA</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
      
        <link href="{{asset('css/sidebarmenu.css')}}" rel="stylesheet">
        
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
        <div class="col-md-10">
           

                <h1>Open Data Display from World Bank Open Data</h1>
                

                <div id="results"></div>
            <div class="content">
                
               <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Acronym</th>
      <th scope="col">Description</th>
      <th scope="col">URL</th>
    </tr>
  </thead>
  <tbody id="wdata">
   
  
  </tbody>
</table>


   
            </div>
        </div>
        
        <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
       <script type="text/javascript">
            $(document).ready(function () {
              
               $.ajax({

    url: 'http://api.worldbank.org/v2/datacatalog?format=json',
    
    type: 'GET',
    crossDomain: true,
    dataType: 'json',
    success: function(data) { 


        
        console.log(data);


    $("#wdata").append("<tr><th>"+data.datacatalog[0].id+"</th><td>"+data.datacatalog[0].metatype[0].value+"</td><td>"+
        data.datacatalog[0].metatype[1].value+"</td><td>"+data.datacatalog[0].metatype[2].value+"</td><td><a  href="+data.datacatalog[0].metatype[3].value+" target='_blank' >Link</a></td></tr>");

   
$("#wdata").append("<tr><th>"+data.datacatalog[1].id+"</th><td>"+data.datacatalog[1].metatype[0].value+"</td><td>"+
        data.datacatalog[1].metatype[1].value+"</td><td>"+data.datacatalog[1].metatype[2].value+"</td><td><a href="+
        data.datacatalog[1].metatype[3].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[2].id+"</th><td>"+data.datacatalog[2].metatype[0].value+"</td><td>"+
        data.datacatalog[2].metatype[1].value+"</td><td>"+data.datacatalog[2].metatype[2].value+"</td><td><a href="+
        data.datacatalog[2].metatype[3].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[3].id+"</th><td>"+data.datacatalog[3].metatype[0].value+"</td><td>"+1
    +"</td><td>"+data.datacatalog[3].metatype[1].value+"</td><td><a href="+
        data.datacatalog[3].metatype[2].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[4].id+"</th><td>"+data.datacatalog[4].metatype[0].value+"</td><td>"+
        data.datacatalog[4].metatype[1].value+"</td><td>"+data.datacatalog[4].metatype[2].value+"</td><td><a href="+
        data.datacatalog[4].metatype[3].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[5].id+"</th><td>"+data.datacatalog[5].metatype[0].value+"</td><td>"+1
        +"</td><td>"+data.datacatalog[5].metatype[1].value+"</td><td><a href="+
        data.datacatalog[5].metatype[2].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[6].id+"</th><td>"+data.datacatalog[6].metatype[0].value+"</td><td>"+
        1+"</td><td><a href="+data.datacatalog[6].metatype[1].value+"</td><td><a href="+
        data.datacatalog[6].metatype[2].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[7].id+"</th><td>"+data.datacatalog[7].metatype[0].value+"</td><td>"+
        data.datacatalog[7].metatype[1].value+"</td><td>"+data.datacatalog[7].metatype[2].value+"</td><td><a href="+
        data.datacatalog[7].metatype[3].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[8].id+"</th><td>"+data.datacatalog[8].metatype[0].value+"</td><td>"+
        data.datacatalog[8].metatype[1].value+"</td><td>"+data.datacatalog[8].metatype[2].value+"</td><td><a href="+
        data.datacatalog[8].metatype[3].value+"target='_blank'>Link</a></td></tr>");
$("#wdata").append("<tr><th>"+data.datacatalog[9].id+"</th><td>"+data.datacatalog[9].metatype[0].value+"</td><td>"+
        data.datacatalog[9].metatype[1].value+"</td><td>"+data.datacatalog[9].metatype[2].value+"</td><td><a href="+
        data.datacatalog[9].metatype[3].value+"target='_blank'>Link</a></td></tr>");


    },
    error: function() { alert('Failed!'); },
   
});




            });

        </script>
    </body>
</html>
