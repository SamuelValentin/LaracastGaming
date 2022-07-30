@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:xl:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            
            @foreach ($popularGames as $game)
            <div class="game mt-8"> <!-- Cyberpunk -->
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/cyberpunk.jpeg" alt="game over" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                        <div class="font-semibolb text-xs flex justify-center items-center h-full">70%</div> 
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{$game['name']}}</a>
                <div class="text-gray-400 mt-1">Xbox-SX</div>
            </div>
            @endforeach


        </div>
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadown-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/alyx.jpeg" alt="game over" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px">
                                <div class="font-semibolb text-xs flex justify-center items-center h-full">98%</div> 
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-4">Half-Life: Alyx</a>
                            <div class="text-gray-400 mt-1">PC</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Half-Life: Alyx é a volta da Valve à série Half-Life em realidade virtual. Trata-se da história de uma impossível luta contra uma raça alienígena cruel, conhecida como Combine, situada entre os eventos de Half-Life e Half-Life 2.

                                Você jogará como Alyx Vance, a única chance de sobrevivência da humanidade. O controle que a Combine exerce sobre o planeta desde o incidente em Black Mesa cresce cada vez mais, à medida que aprisionam o resto da população em cidades. Entre os sobreviventes, estão alguns dos grandes cientistas da Terra: você e o seu pai, o Dr. Eli Vance.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadown-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/cyberpunk.jpeg" alt="game over" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px">
                                <div class="font-semibolb text-xs flex justify-center items-center h-full">70%</div> 
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-4">Cyberpunk 2077</a>
                            <div class="text-gray-400 mt-1">Xbox SX & PC</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Half-Life: Alyx é a volta da Valve à série Half-Life em realidade virtual. Trata-se da história de uma impossível luta contra uma raça alienígena cruel, conhecida como Combine, situada entre os eventos de Half-Life e Half-Life 2.

                                Você jogará como Alyx Vance, a única chance de sobrevivência da humanidade. O controle que a Combine exerce sobre o planeta desde o incidente em Black Mesa cresce cada vez mais, à medida que aprisionam o resto da população em cidades. Entre os sobreviventes, estão alguns dos grandes cientistas da Terra: você e o seu pai, o Dr. Eli Vance.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadown-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="/doom.jpeg" alt="game over" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px">
                                <div class="font-semibolb text-xs flex justify-center items-center h-full">90%</div> 
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-4">DOOM</a>
                            <div class="text-gray-400 mt-1">Xbox Series X</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Half-Life: Alyx é a volta da Valve à série Half-Life em realidade virtual. Trata-se da história de uma impossível luta contra uma raça alienígena cruel, conhecida como Combine, situada entre os eventos de Half-Life e Half-Life 2.

                                Você jogará como Alyx Vance, a única chance de sobrevivência da humanidade. O controle que a Combine exerce sobre o planeta desde o incidente em Black Mesa cresce cada vez mais, à medida que aprisionam o resto da população em cidades. Entre os sobreviventes, estão alguns dos grandes cientistas da Terra: você e o seu pai, o Dr. Eli Vance.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/alyx.jpeg" alt="game over" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-800">Half-Life: Alyx</a>
                            <div class="text-gray-400 text-sm mt-1">Mar 23, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/cyberpunk.jpeg" alt="game over" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-800">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Mar 23, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/doom.jpeg" alt="game over" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-800">Doom</a>
                            <div class="text-gray-400 text-sm mt-1">Mar 23, 2020</div>
                        </div>
                    </div>
                </div>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-5">Coming Soon</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/alyx.jpeg" alt="game over" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-800">Half-Life: Alyx</a>
                            <div class="text-gray-400 text-sm mt-1">Mar 23, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/doom.jpeg" alt="game over" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-800">Doom</a>
                            <div class="text-gray-400 text-sm mt-1">Mar 23, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/ff7.jpeg" alt="game over" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-800">Final Fantasy 7</a>
                            <div class="text-gray-400 text-sm mt-1">Mar 23, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

    

@endsection