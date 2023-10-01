
<x-app-layout>
  

 
    <div style="position: relative; display: inline-block;" >

            <img src="/images/HairBanner.png" alt="">


        <a href="#" style="position: absolute; bottom: 150px; left: 250px; background-color: #000; color: #fff; padding: 8px 16px;   border-radius: 20px; text-decoration: none;">Make an Appointment</a>
      </div>
      
      
      @foreach ($items as $item)
  
      <div class="w-full p-8 rounded lg:w-1/4">
       <img src={{ $item->image }}
           alt="image" style="height: 170px"  class="w-full object-cover rounded-lg">
           <div class="flex row" style="justify-content: space-between;">
            <p>Treatment: {{ $item->item_name }}</p>
            <p>Price: ${{ $item->item_price }}</p>
        </div>
        <br>
           <a href="#" style="background-color: #000; color: #fff; padding: 8px 16px;   border-radius: 20px; text-decoration: none;">Add To Cart</a>
       </div>
   
     @endforeach
  
      <div class=" p-8  "> <h1><center>EXCLUSIVE SERVICES</h1></div>
        <div class="container flex flex-wrap mx-auto">

            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="images/1.jpeg"
                    alt="image" style="height: 170px"  class="w-full object-cover rounded-lg"><p><center>Hair Cuts</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/2.jpeg"
                    alt="image" style="height: 170px" class="w-full object-cover rounded-lg"><p><center>Bridal</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/3.jpeg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Nail Care</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/4.webp"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Consultaion</p>
            </div>
       
    <div class="container flex flex-wrap mx-auto">
        <div class="w-full p-8 rounded lg:w-1/4">
            <img src="images/1.jpeg"
                alt="image" style="height: 170px"  class="w-full object-cover rounded-lg"><p><center>Hair Cuts</p>
        </div>
        <div class="w-full p-8 rounded lg:w-1/4">
            <img src="/images/2.jpeg"
                alt="image" style="height: 170px" class="w-full object-cover rounded-lg"><p><center>Bridal</p>
        </div>
        <div class="w-full p-8 rounded lg:w-1/4">
            <img src="/images/3.jpeg"
                alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Nail Care</p>
        </div>
        <div class="w-full p-8 rounded lg:w-1/4">
            <img src="/images/4.webp"
                alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Consultaion</p>
        </div>

    </div>
    <div class=" p-8  "><h1><center>Festival Deals</h1></div>
        <div class="container flex flex-wrap mx-auto">
            <div class="w-full p-8 rounded-lg  lg:w-1/4">
                <img src="/images/15.jpeg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Nail Care<br>Pedicure</p>
            </div>
            <div class="w-full p-8 rounded-lg  lg:w-1/4">
                <img src="images/18.jpg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Bridal<br>Silver Package</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/12.jpeg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Hair Care<br>Roots Touch Up</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/13.jpeg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Hair Care<br>Keratine Treatment</p>
            </div>
        </div>
</div>

<div class=" p-8  " >
    <h1><center>Popular Services</h1></div>
        <div class="container flex flex-wrap mx-auto">
            <div class="w-full p-8 rounded-lg  lg:w-1/4">
                <img src="/images/9.jpeg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Hightlights</p>
            </div>
            <div class="w-full p-8 rounded-lg  lg:w-1/4">
                <img src="/images/5.jpeg"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Bob Cut</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/7.webp"
                    alt="image" style="height: 170px" class=" w-full object-cover rounded-lg"><p><center>Deep pore cleansing</p>
            </div>
            <div class="w-full p-8 rounded lg:w-1/4">
                <img src="/images/10.jpeg"
                    alt="image" style="height: 170px" class=" w-full rounded-lg"><p><center>Acrylic Nails</p>
            </div>
        </div>
</div>

<!-- component-->
<!--div class="py-16 bg-gradient-to-br from-green-50 to-cyan-100"-->
  <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="mb-12 space-y-2 text-center">
       </div>

      <div  class=" lg:grid-cols-1">
        <div style="background-color: rgb(223, 222, 222)" class="p-1 rounded-xl group sm:flex space-x-6  hover:rounded-2xl">
          <img src="/images/20.jpg" alt="art cover" loading="lazy" width="1000" height="667" class="h-600 sm:h-full w-full sm:w-5/12 object-cover object-top rounded-lg transition duration-500 group-hover:rounded-xl">
          <div class="sm:w-7/12 pl-0 p-5">
            <div class="space-y-2">
              <div class="space-y-4">
                <h4 class="text-2xl font-semibold text-black">Why Hair Studio?</h4>
                <p class="text-gray-600">We are at Hair Studio are incredibly proud to stand for the highest standards in the hair industry. Our approchto hair, makeup, and other beauty treatments in modelled after
                     and set against a backrop of clean-lined, industrial decor where new and original ideas are developed, refined, and inspired by you, for you.
                     We have confidence in excellence with a heart. <br><br>
                     Our dedicated team of beauticias, nail technicians and skin care professionals at Hair Studio have contless years of experince working in the
                      beauty industry.Whether you are a new or returning customer, our staff of highly educated stylists is ready to make you look your very best.
                      We strive to give each customer the best service possible. </p>

          </div>
        </div>

      </div>
  </div>
</div>


<!--testimonials-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
<section><br><br>
   <h2 class=><center>Testimonials</center></h2>
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="swiper-container !overflow-hidden">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <blockquote class="bg-white p-8">
            <div class="flex items-center gap-4">


              <div class="text-sm">
                <p class="font-medium">Sally</p>

              </div>
            </div>

            <p class="relative mt-4 text-gray-500">
              <span class="text-xl">&ldquo;</span>

              I've been meaning to visit this salon for such a long time, and I now regret I have not done it sooner!!
              I had my haircut done by Judy, who’s excellent; I cannot thank him enough.
              Super friendly and welcoming receptionist. The place is spotless!!
              If you have not visited this place yet, you must! I’ll see you soon guys; THANK YOU!!!


              <span class="text-xl">&rdquo;</span>
            </p>
          </blockquote>
        </div>

        <div class="swiper-slide">
          <blockquote class="bg-white p-8">
            <div class="flex items-center gap-4">


              <div class="text-sm">
                <p class="font-medium">Dinee Jarooshan</p>

              </div>
            </div>

            <p class="relative mt-4 text-gray-500">
              <span class="text-xl">&ldquo;</span>

              It was my first tome at Hair Studio and it was such a great experience. Amazing expertise in hair cuts together with great service.
              These guys really care about their client's also their staff is friendly and want to make them look good! My haircut was spot on!
              We'll definitely be returing back and highly recomend this place.

              <span class="text-xl">&rdquo;</span>
            </p>
          </blockquote>
        </div>

        <div class="swiper-slide">
          <blockquote class="bg-white p-8">
            <div class="flex items-center gap-4">


              <div class="text-sm">
                <p class="font-medium">Amanda</p>
              </div>
            </div>

            <p class="relative mt-4 text-gray-500">
              <span class="text-xl">&ldquo;</span>

              For the second time I had the keratine treatment at Hair Studio. The service is excellent and products are promising.
              My keratine treatment service is excellent and products are promising. My keratine treatment lasted for almost a year
              and that was an excellent job done by Hair Studio. Iwas so happy with their work. Thank you Hair Studio.


              <span class="text-xl">&rdquo;</span>
            </p>
          </blockquote>
        </div>

        <div class="swiper-slide">
          <blockquote class="bg-white p-8">
            <div class="flex items-center gap-4">


              <div class="text-sm">
                <p class="font-medium">Tharusha Fernando</p>
              </div>
            </div>

            <p class="relative mt-4 text-gray-500">
              <span class="text-xl">&ldquo;</span>

              I had a hair cut and a hair colour from Hair Studio. They did an amazing job
              withmy hair. I highly recommend Hair Studio for hair cutting and colouring.
              I went there with one of my friend who is an Australian and has blonde hair.
               They did an amazing job on her hair too. Staff is very friendly I'm so happy with my hair after ages.


              <span class="text-xl">&rdquo;</span>
            </p>
          </blockquote>
        </div>
      </div>

      <div class="swiper-pagination !relative !bottom-0 mt-12"></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 8,
      autoplay: {
        delay: 8000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    })
  })
</script>

<!-- Footer section with social media icons and newsletter sign-up -->
<!--footer class="bg-neutral-900 text-center text-white"-->
    <!--div class="container px-6 pt-6"-->
      <!-- Social media icons container -->
      <!--div class="mb-6 flex justify-center">
        <a
          href="#!"
          type="button"
          class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          data-te-ripple-init
          data-te-ripple-color="light">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-full w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
          </svg>
        </a>
        <a
          href="#!"
          type="button"
          class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          data-te-ripple-init
          data-te-ripple-color="light">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-full w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>

        <a
          href="#!"
          type="button"
          class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          data-te-ripple-init
          data-te-ripple-color="light">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-full w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
          </svg>
        </a>

        <a
        href="#!"
        type="button"
        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>

      </div-->

      <!-- Newsletter sign-up form -->
      <!--div>
        <form action="">
          <div
            class="gird-cols-1 grid items-center justify-center gap-4 md:grid-cols-3">
            <div class="md:mb-6 md:ml-auto">
              <p class="">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div-->

            <!-- Newsletter sign-up input field -->
            <!--div class="relative md:mb-6" data-te-input-wrapper-init>
              <input
                type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] text-neutral-200 outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlInput1"
                placeholder="Email address" />
              <label
                for="exampleFormControlInput1"
                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-200 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-neutral-200 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                >Email address
              </label>
            </div-->

            <!-- Newsletter sign-up submit button -->
            <!--div class="mb-6 md:mr-auto">
              <button
                type="submit"
                class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-te-ripple-init
                data-te-ripple-color="light">
                Subscribe
              </button>
            </div>
          </div>
        </form>
      </div-->

      <!-- Copyright information -->
      <!--div class="mb-6">
        <p>

        </p>
      </div-->

      <!-- Links section -->
      <!--div class="grid md:grid-cols-2 lg:grid-cols-4">
        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase">Quick Links</h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">Home</a>
            </li>
            <li>
              <a href="#!" class="text-white">Appointments</a>
            </li>
            <li>
              <a href="#!" class="text-white">Team</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
          </ul>
        </div>

        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase">Services</h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">Hair Cuts</a>
            </li>
            <li>
              <a href="#!" class="text-white">Makeup</a>
            </li>
            <li>
              <a href="#!" class="text-white">Skin Care</a>
            </li>
            <li>
              <a href="#!" class="text-white">Nail Care</a>
            </li>
          </ul>
        </div>

        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase"></h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">Hair Colour</a>
            </li>
            <li>
              <a href="#!" class="text-white">Kids</a>
            </li>
            <li>
              <a href="#!" class="text-white">Bridal</a>
            </li>
            <li>
              <a href="#!" class="text-white">Scalp Treatment</a>
            </li>
          </ul>
        </div>

        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase">Coustomer Care</h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">011-1200340</a>
            </li>
            <li>
              <a href="#!" class="text-white">071-1900000</a>
            </li>
            <li>
              <a href="#!" class="text-white">No:12, Hope Avenue, Colombo.</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
          </ul>
        </div>
      </div>
    </div-->

    <!-- Copyright section -->
    <!--div
      class="p-4 text-center"
      style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:Hair Studio
    </div>
  </footer-->

</x-app-layout>





<footer class="bg-neutral-900 text-center text-white">
    <div class="container px-6 pt-6">
      <!-- Social media icons container -->
      <div class="mb-6 flex justify-center">
        <a
          href="#!"
          type="button"
          class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          data-te-ripple-init
          data-te-ripple-color="light">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-full w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
          </svg>
        </a>
        <a
          href="#!"
          type="button"
          class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          data-te-ripple-init
          data-te-ripple-color="light">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-full w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>

        <a
          href="#!"
          type="button"
          class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
          data-te-ripple-init
          data-te-ripple-color="light">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-full w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
          </svg>
        </a>

        <a
        href="#!"
        type="button"
        class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mx-auto h-full w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>

      </div>

     

            

           

      <!-- Copyright information -->
      <div class="mb-6">
        <p>

        </p>
      </div>

      <!-- Links section -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4">
        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase">Quick Links</h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">Home</a>
            </li>
            <li>
              <a href="#!" class="text-white">Appointments</a>
            </li>
            <li>
              <a href="#!" class="text-white">Team</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
          </ul>
        </div>

        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase">Services</h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">Hair Cuts</a>
            </li>
            <li>
              <a href="#!" class="text-white">Makeup</a>
            </li>
            <li>
              <a href="#!" class="text-white">Skin Care</a>
            </li>
            <li>
              <a href="#!" class="text-white">Nail Care</a>
            </li>
          </ul>
        </div>

        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase"></h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">Hair Colour</a>
            </li>
            <li>
              <a href="#!" class="text-white">Kids</a>
            </li>
            <li>
              <a href="#!" class="text-white">Bridal</a>
            </li>
            <li>
              <a href="#!" class="text-white">Scalp Treatment</a>
            </li>
          </ul>
        </div>

        <div class="mb-6">
          <h5 class="mb-2.5 font-bold uppercase">Coustomer Care</h5>

          <ul class="mb-0 list-none">
            <li>
              <a href="#!" class="text-white">011-1200340</a>
            </li>
            <li>
              <a href="#!" class="text-white">071-1900000</a>
            </li>
            <li>
              <a href="#!" class="text-white">No:12, Hope Avenue, Colombo.</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Copyright section -->
    <div
      class="p-4 text-center"
      style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:Hair Studio
    </div>
  </footer>
