<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/shoppage/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/shoppage/css/styles.css" rel="stylesheet" />
    </head>
    <body>
       
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
    
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    @if ($data->image_kamera)
                    <div class="mb-3">
                        <img style="max-width:1000px;max-height:1000px" src="{{ url('image_kamera').'/'.$data->image_kamera }}" alt="">
                    </div>
                      
                  @endif
                </div>
            </div>
    
            
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3" id="teksbesar">{{ $data->nama_kamera }}</h1>
                    <h4>{{ $data->type_kamera }}</h4>
           
                    <h2>Rp.{{ $data->harga_sewa }}/jam</h2>
                    <br>
                    <h5 id="stokbox">{{$data->stok_kamera}} tersisa</h5>
                    <br>
                    <h4>Keterangan</h4>
                    <h2>{{$data->keterangan}}</h2>
                    
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <a href="{{ route('nyewa') }}">
                            <button type="button" class="btn btn-primary btn-lg btnsewa" id="buttonsewa">Sewa Sekarang</button>
                        </a>
                    </div>
                </div>
            </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/shoppage/js/scripts.js"></script>
    </body>
</html>



        
    
        



