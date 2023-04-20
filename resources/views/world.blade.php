@extends('Layout.main')

@section('navbar')
    <section class="px-4 py-24 mx-auto max-w-7xl">
        <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900 text-center py-10">WORLD NEWS</h2>

        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
            <div>
                <a href="#">
                    <img src="https://netstorage-legit.akamaized.net/images/15375bc25be8a977.jpg?imwidth=720"
                        class="object-cover w-full h-56 mb-5 bg-center rounded" alt="IMAGE" loading="lazy" />
                </a>
                <h2 class="mb-2 text-lg font-semibold text-gray-900">
                    <a href="#" class="text-gray-900 hover:text-purple-700">BREAKING: Former US President Donald Trump
                        Under Arrest Ahead of Arraignment </a>
                </h2>
                <p class="mb-3 text-sm font-normal text-gray-500">
                    The former president of the United States, Donald Trump, is currently under arrest and in police custody
                    ahead of his arraignment Trump is expected to thumbprint as part of the arraignment, but it is not yet
                    sure if his mugshot will be taken It was earlier reported that the former US president would face more
                    than 30 counts charges bordering on fraud in the historic arraignment
                </p>
                <p class="mb-3 text-sm font-normal text-gray-500">
                    <span>by</span> <a href="#"
                        class="font-medium text-gray-900 hover:text-purple-700 hover:underline">Bada Yusuf
                    </a>
                    • April 16, 2023
                </p>
            </div>
            <div>
                <a href="#">
                    <img src="https://netstorage-legit.akamaized.net/images/cd641f1b74ece181.jpg?imwidth=720"
                        class="object-cover w-full h-56 mb-5 bg-center rounded" alt="IMAGE" loading="lazy" />
                </a>
                <h2 class="mb-2 text-lg font-semibold text-gray-900">
                    <a href="#" class="text-gray-900 hover:text-purple-700">BREAKING: Pioneer of "Mini Skirts", "Hot
                        Pants" Dies As 93</a>
                </h2>
                <p class="mb-3 text-sm font-normal text-gray-500">
                    The British have lost a prominent legend, Dame Mary Quant, popularly known as the pioneer of miniskirts
                    and hot pants Dame Mary Quant's family announced her death at the age of 93 on Thursday morning, April
                    13 The fashionista was referred to as one of the influential figures in the fashion industry in the
                    1960s, recognized for making women's wear accessible and affordable
                </p>
                <p class="mb-3 text-sm font-normal text-gray-500">
                    <span>by</span> <a href="#"
                        class="font-medium text-gray-900 hover:text-purple-700 hover:underline">Bada Yusuf
                    </a>
                    • April 16, 2023
                </p>
            </div>
            <div>
                <a href="#">
                    <img src="https://netstorage-legit.akamaized.net/images/f34916af83255c11.jpg?imwidth=720"
                        class="object-cover w-full h-56 mb-5 bg-center rounded" alt="IMAGE" loading="lazy" />
                </a>
                <h2 class="mb-2 text-lg font-semibold text-gray-900">
                    <a href="#" class="text-gray-900 hover:text-purple-700">They Need to Lay Infrastructure: XI Begins
                        Campaign against West-led Order </a>
                </h2>
                <p class="mb-3 text-sm font-normal text-gray-500">
                    President Xi Jinping of Chian has again taken a subtle hibe at western education that talks about
                    democratic values as he takes over the reins for the third time, tightening his grip on China’s
                    political, social, and cultural institutions.
                </p>
                <p class="mb-3 text-sm font-normal text-gray-500">
                    <span>by</span> <a href="#"
                        class="font-medium text-gray-900 hover:text-purple-700 hover:underline">Bada Yusuf</a>
                    • April 16, 2020
                </p>
            </div>



        </div>
        <div
            class="flex flex-col items-center justify-center mt-20 space-x-0 space-y-2 md:space-x-2 md:space-y-0 md:flex-row">
            <a href="#" class="w-full rounded-full btn btn-light btn-xl md:w-auto">Previous Page</a>
            <a href="#" class="w-full rounded-full btn btn-light btn-xl md:w-auto">Next Page</a>
        </div>
    </section>
@endsection
