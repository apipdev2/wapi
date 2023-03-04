<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><?= $title; ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
          
          
        
         <!-- Sales Card -->
            <div class="col-xl-8 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"><span>Statistik Perkecamatan</span></h5>
                    
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xl-4 col-md-6">
              

              <div class="card">
                <div class="card-header bg-primary text-light">
                  <div id="logs"></div>
                </div>
                <div class="card-body">
                   <center>
                    <img src="./assets/loader.gif" alt="loading" id="qrcode"  width="280"  >
                    
                        <button class="btn btn-warning" type="button" onclick="logout()">logout whatsapp</button>
                   
                    
                    </center>
                </div>

              </div>

            </div><!-- End Sales Card -->


      </div>
    </section>

     

  </main><!-- End #main -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js" crossorigin="anonymous"></script>
<script>
        const qrcode = document.getElementById("qrcode");  
        const logs = document.getElementById("logs");        
        const socket = io('http://localhost:8000',{
            secure: true,
            transports:['websocket','polling']
        });

        socket.on("qr", src => {
            qrcode.setAttribute("src", src);
            qrcode.setAttribute("alt", "qrcode");
        });
        socket.on("qrstatus", src => {
            qrcode.setAttribute("src", src);
            qrcode.setAttribute("alt", "loading");
        });
        
        socket.on("log", log => {
            console.log(log);
            logs.innerHTML="<p class='text-center'>"+log+"</p>";
        });

        

        function logout(){
            socket.emit('LogoutDevice');
        }

        
      
</script>

 