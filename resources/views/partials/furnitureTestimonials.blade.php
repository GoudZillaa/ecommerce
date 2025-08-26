 <style>
        /* ======================================
        Extracted Testimonial Slider CSS
        ========================================*/
        .testimonial-active-3 {
            position: relative;
            padding: 20px 0;
            overflow: hidden;
        }

        .swiper-slide {
            height: auto;
        }

        /* Specific styling for the furniture-testimonial section based on your provided classes */
        .furniture-testimonial__item {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            height: 100%; /* Ensure all items are the same height */
            display: flex;
            flex-direction: column;
        }
        
        .furniture-testimonial__item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .ft-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .ft-info {
            display: flex;
            flex-direction: column;
        }

        .fs-rating {
            color: #ffc107; /* A gold color for stars */
            margin-bottom: 5px;
        }

        .ft-info h5 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        .ft-info span {
            font-size: 0.9rem;
            color: #777;
        }
        
        .furniture-testimonial__item p {
            font-style: italic;
            color: #555;
            margin: 0;
            line-height: 1.6;
            flex-grow: 1; /* Allow the paragraph to fill space */
        }
        
        .furniture-testimonial__item svg path {
            fill: #B18B5E; /* The color from your SVG code */
        }

        /* Swiper Navigation and Pagination */
        .swiper-container {
            position: relative;
        }
        
        .testimonial-navigation {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            pointer-events: none;
        }

        .testimonial-button-prev,
        .testimonial-button-next {
            pointer-events: auto;
            color: #555;
            background: #fff;
            border: 1px solid #ddd;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .testimonial-button-prev:hover,
        .testimonial-button-next:hover {
            background: #eee;
            color: #333;
        }
        
        .bd-swiper-dot {
            position: relative;
            margin-top: 20px;
            text-align: center;
        }
        
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background-color: #ddd;
            opacity: 1;
            transition: background-color 0.3s ease;
        }
        
        .swiper-pagination-bullet-active {
            background-color: #555;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .testimonial-navigation {
                display: none; /* Hide navigation on smaller screens for cleaner look */
            }
        }
    </style>
<section class="furniture-testimonial section-space bg-image" data-background="{{ asset('assets/imgs/furniture/testimonial/bg.jpg') }}" style="background-image: url(&quot;{{ asset('assets/imgs/furniture/testimonial/bg.jpg') }}&quot;);">
   <div class="container">
      <div class="section-title-wrapper-4 is-white mb-40 text-center">
         <span class="section-subtitle-4 mb-10">Testimonials</span>
         <h2 class="section-title-4">Client Feedback</h2>
      </div>
      <div class="swiper testimonial-active-3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
         <div class="swiper-wrapper" id="swiper-wrapper-d3e39a44d3264439" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1140px, 0px, 0px);">
            
            <div class="swiper-slide bg-white swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 350px; margin-right: 30px;">
               <div class="furniture-testimonial__item">
                  <div class="ft-head">
                     <div class="ft-info">
                        <div class="fs-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                        <h5>Annette Black</h5>
                        <span>Dog Trainer</span>
                     </div>
                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_276_28)">
                           <path d="M23.9729 40C23.9729 37.384 23.9729 34.7679 23.9729 32.0675C27.1379 32.1519 29.7642 30.8861 31.717 27.7637C32.7945 26.076 33.5352 23.7131 33.5352 21.8565C29.8989 21.8565 26.1952 21.8565 22.4915 21.8565C22.4915 14.5148 22.4915 7.25738 22.4915 0C28.2827 0 34.0739 0 39.9325 0C39.9325 0.253165 39.9325 0.421941 39.9325 0.675106C39.9325 7.34177 39.9325 14.0084 39.9325 20.5907C39.9325 29.9578 35.084 37.5527 27.8113 39.5781C26.5992 40 25.3197 40.0844 23.9729 40ZM35.084 20C35.084 20.0844 35.1514 20.1688 35.1514 20.1688C35.4207 26.6667 31.7844 32.4895 26.6665 33.7553C26.2625 33.8397 25.7238 33.8397 25.5218 34.0928C25.3197 34.4304 25.4544 35.1055 25.4544 35.6118C25.4544 36.4557 25.4544 37.2996 25.4544 38.2278C26.3972 37.9747 27.2726 37.8903 28.148 37.6371C34.276 35.6118 38.451 28.8608 38.451 20.8439C38.451 14.6835 38.451 8.6076 38.451 2.44726C38.451 2.27848 38.451 2.1097 38.451 1.94093C33.6026 1.94093 28.8214 1.94093 24.0403 1.94093C24.0403 8.01688 24.0403 14.0084 24.0403 20C27.744 20 31.3803 20 35.084 20Z" fill="#B18B5E"></path>
                           <path d="M1.4141 40C1.4141 37.384 1.4141 34.7679 1.4141 32.0675C4.4444 32.1519 7.00332 30.9705 8.95619 28.0169C10.1683 26.2447 10.909 23.8819 10.9764 21.7721C7.34002 21.7721 3.63632 21.7721 -0.0673828 21.7721C-4.2744e-05 14.5148 -4.2744e-05 7.25738 -4.2744e-05 0C5.7912 0 11.5824 0 17.3737 0C17.3737 0.168776 17.3737 0.337553 17.3737 0.506329C17.3737 7.25738 17.3737 14.0928 17.3737 20.8439C17.3064 29.7046 12.6599 37.2152 5.7912 39.4093C4.37706 39.9156 2.96292 40.0844 1.4141 40ZM15.9596 1.85654C11.1111 1.85654 6.32992 1.85654 1.54878 1.85654C1.54878 7.93249 1.54878 13.924 1.54878 20C5.25248 20 8.95619 20 12.5926 20C12.9293 27.0042 8.75417 33.4177 2.96292 34.0084C2.96292 35.3586 2.96292 36.7932 2.96292 38.2278C3.83834 37.9747 4.71376 37.8903 5.58918 37.5527C11.7171 35.6118 15.8922 28.7764 15.9596 20.7595C15.9596 14.5992 15.9596 8.52321 15.9596 2.36287C15.9596 2.27848 15.9596 2.1097 15.9596 1.85654Z" fill="#B18B5E"></path>
                        </g>
                        <defs>
                           <clipPath>
                              <rect width="40" height="40" fill="white"></rect>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <p >Lorem ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.</p>
               </div>
            </div>

            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 350px; margin-right: 30px;">
               <div class="furniture-testimonial__item">
                  <div class="ft-head">
                     <div class="ft-info">
                        <div class="fs-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                        <h5>Ralph Edwards</h5>
                        <span>UI/UX Designer</span>
                     </div>
                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_276_28)">
                           <path d="M23.9729 40C23.9729 37.384 23.9729 34.7679 23.9729 32.0675C27.1379 32.1519 29.7642 30.8861 31.717 27.7637C32.7945 26.076 33.5352 23.7131 33.5352 21.8565C29.8989 21.8565 26.1952 21.8565 22.4915 21.8565C22.4915 14.5148 22.4915 7.25738 22.4915 0C28.2827 0 34.0739 0 39.9325 0C39.9325 0.253165 39.9325 0.421941 39.9325 0.675106C39.9325 7.34177 39.9325 14.0084 39.9325 20.5907C39.9325 29.9578 35.084 37.5527 27.8113 39.5781C26.5992 40 25.3197 40.0844 23.9729 40ZM35.084 20C35.084 20.0844 35.1514 20.1688 35.1514 20.1688C35.4207 26.6667 31.7844 32.4895 26.6665 33.7553C26.2625 33.8397 25.7238 33.8397 25.5218 34.0928C25.3197 34.4304 25.4544 35.1055 25.4544 35.6118C25.4544 36.4557 25.4544 37.2996 25.4544 38.2278C26.3972 37.9747 27.2726 37.8903 28.148 37.6371C34.276 35.6118 38.451 28.8608 38.451 20.8439C38.451 14.6835 38.451 8.6076 38.451 2.44726C38.451 2.27848 38.451 2.1097 38.451 1.94093C33.6026 1.94093 28.8214 1.94093 24.0403 1.94093C24.0403 8.01688 24.0403 14.0084 24.0403 20C27.744 20 31.3803 20 35.084 20Z" fill="#B18B5E"></path>
                           <path d="M1.4141 40C1.4141 37.384 1.4141 34.7679 1.4141 32.0675C4.4444 32.1519 7.00332 30.9705 8.95619 28.0169C10.1683 26.2447 10.909 23.8819 10.9764 21.7721C7.34002 21.7721 3.63632 21.7721 -0.0673828 21.7721C-4.2744e-05 14.5148 -4.2744e-05 7.25738 -4.2744e-05 0C5.7912 0 11.5824 0 17.3737 0C17.3737 0.168776 17.3737 0.337553 17.3737 0.506329C17.3737 7.25738 17.3737 14.0928 17.3737 20.8439C17.3064 29.7046 12.6599 37.2152 5.7912 39.4093C4.37706 39.9156 2.96292 40.0844 1.4141 40ZM15.9596 1.85654C11.1111 1.85654 6.32992 1.85654 1.54878 1.85654C1.54878 7.93249 1.54878 13.924 1.54878 20C5.25248 20 8.95619 20 12.5926 20C12.9293 27.0042 8.75417 33.4177 2.96292 34.0084C2.96292 35.3586 2.96292 36.7932 2.96292 38.2278C3.83834 37.9747 4.71376 37.8903 5.58918 37.5527C11.7171 35.6118 15.8922 28.7764 15.9596 20.7595C15.9596 14.5992 15.9596 8.52321 15.9596 2.36287C15.9596 2.27848 15.9596 2.1097 15.9596 1.85654Z" fill="#B18B5E"></path>
                        </g>
                        <defs>
                           <clipPath>
                              <rect width="40" height="40" fill="white"></rect>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.</p>
               </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 350px; margin-right: 30px;">
               <div class="furniture-testimonial__item">
                  <div class="ft-head">
                     <div class="ft-info">
                        <div class="fs-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                        <h5>Jerome Bell</h5>
                        <span>Web Designer</span>
                     </div>
                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_276_28)">
                           <path d="M23.9729 40C23.9729 37.384 23.9729 34.7679 23.9729 32.0675C27.1379 32.1519 29.7642 30.8861 31.717 27.7637C32.7945 26.076 33.5352 23.7131 33.5352 21.8565C29.8989 21.8565 26.1952 21.8565 22.4915 21.8565C22.4915 14.5148 22.4915 7.25738 22.4915 0C28.2827 0 34.0739 0 39.9325 0C39.9325 0.253165 39.9325 0.421941 39.9325 0.675106C39.9325 7.34177 39.9325 14.0084 39.9325 20.5907C39.9325 29.9578 35.084 37.5527 27.8113 39.5781C26.5992 40 25.3197 40.0844 23.9729 40ZM35.084 20C35.084 20.0844 35.1514 20.1688 35.1514 20.1688C35.4207 26.6667 31.7844 32.4895 26.6665 33.7553C26.2625 33.8397 25.7238 33.8397 25.5218 34.0928C25.3197 34.4304 25.4544 35.1055 25.4544 35.6118C25.4544 36.4557 25.4544 37.2996 25.4544 38.2278C26.3972 37.9747 27.2726 37.8903 28.148 37.6371C34.276 35.6118 38.451 28.8608 38.451 20.8439C38.451 14.6835 38.451 8.6076 38.451 2.44726C38.451 2.27848 38.451 2.1097 38.451 1.94093C33.6026 1.94093 28.8214 1.94093 24.0403 1.94093C24.0403 8.01688 24.0403 14.0084 24.0403 20C27.744 20 31.3803 20 35.084 20Z" fill="#B18B5E"></path>
                           <path d="M1.4141 40C1.4141 37.384 1.4141 34.7679 1.4141 32.0675C4.4444 32.1519 7.00332 30.9705 8.95619 28.0169C10.1683 26.2447 10.909 23.8819 10.9764 21.7721C7.34002 21.7721 3.63632 21.7721 -0.0673828 21.7721C-4.2744e-05 14.5148 -4.2744e-05 7.25738 -4.2744e-05 0C5.7912 0 11.5824 0 17.3737 0C17.3737 0.168776 17.3737 0.337553 17.3737 0.506329C17.3737 7.25738 17.3737 14.0928 17.3737 20.8439C17.3064 29.7046 12.6599 37.2152 5.7912 39.4093C4.37706 39.9156 2.96292 40.0844 1.4141 40ZM15.9596 1.85654C11.1111 1.85654 6.32992 1.85654 1.54878 1.85654C1.54878 7.93249 1.54878 13.924 1.54878 20C5.25248 20 8.95619 20 12.5926 20C12.9293 27.0042 8.75417 33.4177 2.96292 34.0084C2.96292 35.3586 2.96292 36.7932 2.96292 38.2278C3.83834 37.9747 4.71376 37.8903 5.58918 37.5527C11.7171 35.6118 15.8922 28.7764 15.9596 20.7595C15.9596 14.5992 15.9596 8.52321 15.9596 2.36287C15.9596 2.27848 15.9596 2.1097 15.9596 1.85654Z" fill="#B18B5E"></path>
                        </g>
                        <defs>
                           <clipPath>
                              <rect width="40" height="40" fill="white"></rect>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur the adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.</p>
               </div>
            </div>
         </div>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <div class="navigation__wrapprer text-center">
         <div class="common-slider-navigation">
            <button class="testimonial-button-prev" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-d3e39a44d3264439">
               <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.653 6.09637H1.36561L6.08271 0.817658C6.39343 0.45785 6.39343 -0.158356 6.08271 -0.518164C5.772 -0.877971 5.26359 -0.877971 4.95287 -0.518164L-0.000305176 5.25055C-0.000305176 5.59036 -0.000305176 5.76027 0.170417 5.93018L0.170417 5.93018L4.95287 11.6989C5.26359 12.0587 5.772 12.0587 6.08271 11.6989C6.39343 11.3391 6.39343 10.7229 6.08271 10.3631L1.36561 5.08439H17.653C18.0645 5.08439 18.396 5.37279 18.396 5.7326C18.396 6.09241 18.0645 6.3808 17.653 6.3808L17.653 6.09637Z" fill="#B18B5E"></path>
               </svg>
            </button>
            <button class="testimonial-button-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-d3e39a44d3264439">
               <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.347046 6.09637H16.6344L11.9173 0.817658C11.6066 0.45785 11.6066 -0.158356 11.9173 -0.518164C12.228 -0.877971 12.7364 -0.877971 13.0471 -0.518164L18.0003 5.25055C18.0003 5.59036 18.0003 5.76027 17.8296 5.93018L17.8296 5.93018L13.0471 11.6989C12.7364 12.0587 12.228 12.0587 11.9173 11.6989C11.6066 11.3391 11.6066 10.7229 11.9173 10.3631L16.6344 5.08439H0.347046C-0.0644903 5.08439 -0.395982 5.37279 -0.395982 5.7326C-0.395982 6.09241 -0.0644903 6.3808 0.347046 6.3808L0.347046 6.09637Z" fill="#B18B5E"></path>
               </svg>
            </button>
         </div>
      </div>
   </div>
</section>
