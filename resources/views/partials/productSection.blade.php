<section class="bd-product__area section-space">
   <div class="container">
      <div class="row">
         <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <div class="bd-product__result mb-30">
               <h4>{{ count($products) }} Items On List</h4>
            </div>
         </div>
         <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6">
            <div class="product__filter-wrapper d-flex flex-wrap gap-3 align-items-center justify-content-md-end mb-30">
               <div class="bd-product__filter-btn">
                  <button type="button"><i class="fa-solid fa-list"></i> Filter</button>
               </div>
               <div class="product__filter-count d-flex align-items-center">
                  <div class="btn-dropdown__options">
                     <select>
                        <option>Show 20</option>
                        <option>This Past Week</option>
                        <option>This Past Month</option>
                        <option>This Past Year</option>
                        <option>All Time</option>
                     </select>
                  </div>
                  <div class="bd-product__filter-style nav nav-tabs" role="tablist">
                     <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-selected="true"><i class="fa-solid fa-grid"></i></button>
                     <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-selected="false"><i class="fa-solid fa-bars"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-xxl-12">
            <div class="product__filter-tab">
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                     <div class="row g-5">

                        {{-- Loop through products --}}
                        @foreach($products as $product)
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                           <div class="product-item">

                              @if(!empty($product['badge']))
                              <div class="product-badge">
                                 <span class="product-trending">{{ $product['badge'] }}</span>
                              </div>
                              @endif

                              <div class="product-thumb">
                                 <a href="{{ url('products/'.$product['slug']) }}">
                                    <img src="{{ asset('assets/imgs/product/'.$product['image']) }}" alt="{{ $product['name'] }}">
                                 </a>
                              </div>

                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>

                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>{{ $product['category'] ?? 'Uncategorized' }}</span>
                                 </div>
                                 <h4 class="product-title">
                                    <a href="{{ url('products/'.$product['slug']) }}">{{ $product['name'] }}</a>
                                 </h4>
                                 <div class="product-price">
                                    @if(!empty($product['old_price']))
                                       <span class="product-old-price"><del>${{ number_format($product['old_price'], 2) }}</del></span>
                                    @endif
                                    <span class="product-new-price">${{ number_format($product['price'], 2) }}</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
               <div class="bd-basic__pagination mt-50 d-flex align-items-center justify-content-center">
                  <nav>
                     <ul>
                        <li>
                           <span class="current">1</span>
                        </li>
                        <li>
                           <a href="#">2</a>
                        </li>
                        <li>
                           <a href="#">3</a>
                        </li>
                        <li>
                           <a href="#"><i class="fa-regular fa-angle-right"></i></a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
   </div>
</section>
