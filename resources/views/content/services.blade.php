<div class="container xl:max-w-6xl mx-auto px-4">
    <!-- Heading start -->
    <header class="text-center mx-auto mb-12 lg:px-20">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black">
            holla
        </h2>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
            <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
            <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                style="stroke-width: 2;stroke-miterlimit: 10;"></line>
            <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                style="stroke-width: 2;stroke-miterlimit: 10;"></line>
        </svg>
        <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">hollaaaaa</p>
    </header><!-- End heading -->

    <!-- row -->
    <div class="flex flex-wrap flex-row -mx-4 text-center">
        @foreach ($services as $service)
        <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s">
            <!-- service block -->
            <div
                class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                <div class="inline-block text-gray-900 mb-4">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{$service->title}}</h3>
                <p class="text-gray-500">{{$service->description}}</p>
            </div> <!-- end service block -->
        </div>
        @endforeach
    </div><!-- end row -->
</div>
