@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="/cyberpunk.jpeg" alt="cover">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-1">Cyberpunk 2077</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>CD Projekt Red</span>
                    &middot;
                    <span>Xbos Series X</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">70%</div>
                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">70%</div>
                        </div>
                        <div class="ml-4 text-xs">Citric <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 ml-3 lg:mt-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 16 17"></svg>
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                a
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                a
                            </a>
                        </div>
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                a
                            </a>
                        </div>
                    </div>
                </div>
            
                <p class="mt-12">Cyberpunk 2077 é um RPG de ação e aventura em mundo aberto ambientado na megalópole de Night City, onde você é um mercenário cyberpunk envolvido em uma intensa luta pela sobrevivência. Com diversas melhorias e conteúdo adicional gratuito, personalize o seu personagem e o seu estilo de jogo conforme aceita trabalhos, construa uma reputação e desbloqueie melhorias. Seus relacionamentos e suas escolhas moldarão a história e o mundo ao seu redor. Aqui nascem as lendas. Qual será a sua?</p>

                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>  <!-- end game details -->
        
        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="/screenshot1.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot2.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot3.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot4.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot5.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="/screenshot6.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div><!-- end screenshots -->

        <div class="similar-games-container pb-12 mt-8 items-center">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>

            <div class="ml-5 md:ml-0 popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:xl:grid-cols-6 xl:grid-cols-6 gap-12 pb-16 items-center">
                <div class="game mt-8"> <!-- Doom -->
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/doom.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                            <div class="font-semibolb text-xs flex justify-center items-center h-full">95%</div> 
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom</a>
                    <div class="text-gray-400 mt-1">Xbox SX & PC</div>
                </div>

                <div class="game mt-8"> <!-- Avengers -->
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/avengers.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                            <div class="font-semibolb text-xs flex justify-center items-center h-full">78%</div> 
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Avengers</a>
                    <div class="text-gray-400 mt-1">Xbox SX & PC</div>
                </div>

                <div class="game mt-8"> <!-- Ghost -->
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ghost.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                            <div class="font-semibolb text-xs flex justify-center items-center h-full">90%</div> 
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Ghost</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>

                <div class="game mt-8"> <!-- Alyx -->
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/alyx.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                            <div class="font-semibolb text-xs flex justify-center items-center h-full">98%</div> 
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Half-Life: Alyx</a>
                    <div class="text-gray-400 mt-1">PC</div>
                </div>

                <div class="game mt-8"> <!-- FF7 -->
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                            <div class="font-semibolb text-xs flex justify-center items-center h-full">90%</div> 
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7</a>
                    <div class="text-gray-400 mt-1">Playstation 4 & PC</div>
                </div>

                <div class="game mt-8"> <!-- Ghost -->
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ghost.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                            <div class="font-semibolb text-xs flex justify-center items-center h-full">90%</div> 
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Ghost</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>

            </div>
        </div> <!-- end similar games-->

    </div>
@endsection