<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        button{
            padding-inline:1rem;
            border-radius:10px;
            background-color:white;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body" style="height: 60vh;overflow-y: scroll;">
        <div style="padding: 0.2rem;margin-block: 1rem;width: auto;">
            <span style="background-color:orange;width: auto;padding: 0.5rem;border-radius: 10px; display: inline-block">
                Hello how are youu?
                
            </span>
        </div>
        <div style="padding: 0.2rem;margin-block: 1rem;width: auto; text-align: end;">
            <span style="background-color:burlywood;width: auto;padding: 0.5rem;border-radius: 10px; display: inline-block">
                Fine, how are youu?
                
            </span>
        </div>
        
        </div>
        <div class="modal-footer" >
            <div class="d-flex flex-row justify-content-start">
                <input type="text" id="data" style="width: 20rem;border-radius: 10px;border: 1px solid black;">
                    <div>
                        
                        <input type="submit" id="btn"  value="Send" style="padding-inline: 1rem;background-color:rgb(19, 128, 238);color: white;border-radius: 10px;margin-left:1rem;">
                    </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
        $('#btn').on('click',function(){
            $data=$('#data').val();
            $message= '<div style="padding: 0.2rem;margin-block: 1rem;width: auto; text-align: end;"> <span style="background-color:burlywood;width: auto;padding: 0.5rem;border-radius: 10px; display: inline-block"> '+$data+'</span>  </div>';
            $('#body').append($message); 
            $('#data').val(" ");
            $.ajax({
                type:'POST',
                url:'chatbot3ajax.php',
                data:'value='+$data,
                success:function(result){
                    $reply = result;
                    $('#body').append($reply); 
                }
            })
        })
    })
  </script>
  <button id="b" value="blik">
    Click
  </button>
  <button id="a" value="blik">
    Click
  </button>
  <button id="v" value="blik">
    Click
  </button>
  <button id="e" value="blik" style="padding-inline:1rem;border-radius:10px;background-color:white;border:1px solid black;">
    Click
  </button>
  <script>
    $('button').on('click',function(){
       
        var id = $(this).attr('id');
        console.log(id);
    })
  </script>
</body>
</html>