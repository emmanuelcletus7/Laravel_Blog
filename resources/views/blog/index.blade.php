@extends('Layout.main')

@section('navbar')
    <div id="backimg">
        <div class="bg-black/30 py-5 hover:bg-black/30">
            <section class="w-full px-4 py-24 mx-auto max-w-7xl md:w-3/4 lg:w-2/4">
                <div class="flex flex-col space-y-12 divide-y divide-gray-200 ">
                    <div>
                        <p class="pt-12 mb-3 text-sm font-normal text-white" title="">April 16, 2023</p>
                        <h2 class="mb-2 text-xl font-extrabold leading-snug tracking-tight text-gray-800 md:text-3xl">
                            <a href="#" class="text-white hover:text-purple-700">Kogi 2023: Dino Melaye Goes Spiritual,
                                Explains How He Was Bankrolled to Win PDP Guber Primary </a>
                        </h2>
                        <p class="mb-4 text-base font-normal text-white">
                            Dino Melaye has said God Almighty bankrolled him in the just concluded 2023 PDP governorship
                            primary in Kogi state The former lawmaker said contrary to claims that party delegates were paid
                            to cast their votes for preferred candidates, he only offered some 'anointing oil' According to
                            Melaye, he is a firm believer in the wonder-working power of God Almighty, even in political
                            affairs
                        </p>
                        <a href="#" class="btn btn-light bg-black text-white">Continue Reading</a>
                    </div>

                </div>
            </section>
        </div>
    </div>


    {{-- this is the breaking news section --}}
    <div class="py-10">
        <h1 class="py-4 text-5xl font-bold text-center">
            BREAKING NEWS
        </h1>
    </div>
    <div class="dark:bg-gray-800 dark:text-gray-50 my-20">
        <div class="container grid grid-cols-12 mx-auto">
            <a href=""
                class="flex flex-col justify-center col-span-12 align-middle bg-no-repeat bg-cover hover:bg-red-500/30 dark:bg-gray-700 lg:col-span-6 lg:h-auto"
                style="background-image: url('https://netstorage-legit.akamaized.net/images/d4108029f91485e1.jpg?impolicy=cropped-image&imwidth=720'); background-position: center center; background-blend-mode: multiply; background-size: cover;">
                <div class="flex flex-col items-center text-white p-8 py-12 text-center ">
                    <span>12 June 2023</span>
                    <h1 class="py-4 text-5xl font-bold">BREAKING: PDP Fintiri Wins Adamawa After Dramatic Playout Election
                    </h1>
                    <p class="pb-6">Governor Ahmadu Fintiri of the PDP has secured victory for his second term in office
                        as INEC has declared him the winner of the Adamawa state governorship election</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-7 h-7">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </a>
            <div class="flex flex-col col-span-12 p-6 divide-y lg:col-span-6 lg:p-10 divide-gray-700">
                <a href=""class="pt-6 pb-4 space-y-2">
                    <span>April 16 2023</span>
                    <h1 class="text-3xl font-bold hover:text-purple-700">BREAKING: PDP Fintiri Wins Adamawa After Dramatic
                        Playout Election
                    </h1>
                    <p>According to INEC, Fintiri polled a total of 430,861 votes to defeat Aishatu Binani of the APC,
                        who
                        scored a total of 398,788 votes </p>
                    <a rel="noopener noreferrer" href="#"
                        class="inline-flex items-center py-2 space-x-2 text-sm dark:text-violet-400">
                        <span>Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </a>
            </div>
        </div>
    </div>

    {{-- this is the recommemnded for you section --}}
    <section class="px-4 py-24 mx-auto max-w-7xl">
        <h2 class="pb-8 mb-12 text-2xl font-extrabold leading-tight text-gray-900 border-b border-gray-200 md:text-4xl">
            RECOMMENDED FOR YOU</h2>
        <div class="w-full xl:w-4/6">
            <div class="flex flex-col space-y-16">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                    <a href="">
                        <img src="https://netstorage-legit.akamaized.net/images/5980cdf5c6a13b4a.jpg?imwidth=720"
                            class="object-cover w-full h-40 col-span-1 bg-center" alt="IMAGE"
                            loading="lazy" />
                    </a>
                    <div class="col-span-1 md:col-span-3">
                        <p class="mb-2 -mt-1 text-sm font-normal text-gray-500">April 16, 2023</p>
                        <h2 class="mb-2 text-xl font-extrabold leading-snug text-gray-800">
                            <a href="#" class="text-gray-900 hover:text-purple-700">"Can We Be Friends?" Charming Lady
                                With Light Skin Gets Dirty During Military Training, Video Goes Viral</a>
                        </h2>
                        <p class="mb-3 text-sm font-normal text-gray-500">
                            A video shows a very beautiful lady taking part in rigorous training that would make her a Navy
                            personnel The lady was seen crawling on all fours as the commanders shouted their orders The
                            video has gone viral and received more than 740k views on TikTok, where many praised the lady's
                            beauty.
                        </p>
                        <a href="#" class="btn btn-light btn-sm">Read More</a>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                    <a href=""><img
                            src="https://netstorage-legit.akamaized.net/images/401e6af2df8b7d86.jpg?imwidth=720"
                            class="object-cover w-full h-40 col-span-1 bg-center " alt="IMAGE"
                            loading="lazy" />
                    </a>
                    <div class="col-span-1 md:col-span-3">
                        <p class="mb-2 -mt-1 text-sm font-normal text-gray-500">April 16, 2023</p>
                        <h2 class="mb-2 text-xl font-extrabold leading-snug text-gray-800">
                            <a href="#" class="text-gray-900 hover:text-purple-700">“I Don Blow”: Moment Fake OBO Went
                                Gaga After Meeting Davido Face-to-Face Inside Nightclub, Performs for Him</a>
                        </h2>
                        <p class="mb-3 text-sm font-normal text-gray-500">
                            Davido’s die-hard fan, Twin OBO, has finally gotten the rare opportunity to meet the music star
                            face to face Just recently, a video making the rounds on social media captured the young man
                            going gaga inside a nightclub where Davido and his crew members visited The singer couldn’t help
                            but blush as he looked at his lookalike fan, and netizens had different things to say about the
                            video
                        </p>
                        <a href="#" class="btn btn-light btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <div class="pt-10 mt-10 border-t border-gray-200">
                <a href="#" class="w-full btn btn-light btn-lg md:w-auto">Load More</a>
            </div>
        </div>
    </section>
@endsection
