@extends('client.base')

@section('content')
      <section class="py-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
              <div class="row m-sm-0">
                <div class="col-sm-10 order-1 order-sm-2">
                  <div class="owl-carousel product-slider" data-slider-id="1"><a class="d-block" href="{{'public'}}/destination/img/product-detail-1.jpg" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="{{"public/$produk->gambar"}}" alt="..."></a></div>
                </div>
              </div>
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6">
              <h1>{{$produk->nama}}</h1>
              <p class="text-muted lead">{{$produk->format_harga}}</p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-5 pr-sm-0">
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                    <div class="quantity">
                      <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                      <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                      <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="#">Add to cart</a></div>
              </div><br>
              <ul class="list-unstyled small d-inline-block">
                <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ml-2 text-muted">{{$produk->id}}</span></li>
                <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ml-2" href="{{'public'}}/destination/#">Innovation</a></li>
              </ul>
            </div>
          </div>
          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase">Description </h6>
                <p class="text-muted text-small mb-0">{{$produk->deskripsi}}</p>
              </div>
            </div>
          </div>
          <!-- RELATED PRODUCTS-->
          <h2 class="h5 text-uppercase mb-4">Others products</h2>
          <div class="row">
            @foreach($list_produk as $produk)
            <div class="col-lg-3 col-sm-6">
              <div class="product text-center skel-loader">
                <div class="d-block mb-3 position-relative"><a class="d-block" href="{{url($produk->id)}}"><img class="img-fluid w-100 " src="{{"public/$produk->gambar"}}" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="#">Add to cart</a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="{{url($produk->id)}}">{{$produk->nama}}</a></h6>
                <p class="small text-muted">{{$produk->format_harga}}</p>
              </div>
            </div>
            @endforeach
            {{$list_produk->links()}}
          </div>
        </div>
      </section>
@endsection