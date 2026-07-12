<x-guest-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col justify-center">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">

        <table class="w-full text-sm text-left bg-slate-950">
            <thead class="text-xs text-white uppercase shadow-none ripple">
            <tr>
                <th scope="col" class="px-6 py-3">Habilidade SKU</th>
                <th scope="col" class="px-6 py-3">Nome da Habilidade</th>
                <th scope="col" class="px-6 py-3">Imagem</th>
                <th scope="col" class="px-6 py-3 text-center">Ações</th>
            </tr>
            </thead>
            <tbody class="bg-white shadow-2xl">
                    @forelse($getSkills as $skills)
                        <tr>
                            <td class="px-6 py-4">{{$skills->id}}</td>
                            <td class="px-6 py-4">{{$skills->name}}</td>
                            <td class="px-6 py-4"><img src="{{asset('storage/'. $skills->image)}}" alt="" class="w-10 h-10"></td>
                            <td class="px-6 py-4 grid grid-cols-2 text-center">
                                <a href="{{route('skills.edit',$skills->id )}}" class="bg-red-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-red-700"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a  href="{{route('skills.destroy',$skills->id )}}" class="bg-green-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-green-800"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td>Nenhuma habilidade encontrada</td>
                            </tr>
                    @endforelse
            </tbody>
            </table>

            <table class="w-full text-sm text-left bg-slate-950 mt-[130px] ">
            <thead class="text-xs text-white uppercase shadow-none ripple">
            <tr>
                <th scope="col" class="px-6 py-3">Projeto SKU</th>
                <th scope="col" class="px-6 py-3">Nome do Projeto</th>
                <th scope="col" class="px-6 py-3">Imagem</th>
                <th scope="col" class="px-6 py-3 text-center">Ação</th>
            </tr>
            </thead>
            <tbody class="bg-white shadow-2xl">
                    @forelse($getProjects as $project )
                        <tr>
                            <td class="px-6 py-4">{{$project->id}}</td>
                            <td class="px-6 py-4">{{$project->name}}</td>
                            <td class="px-6 py-4"><img src="{{ asset('storage/'. $project->image) }}" alt=""   class="w-10 h-10"></td>
                            <td class="px-6 py-4 grid grid-cols-2 text-center">
                                <a href="{{route('project.edit',$project->id )}}" class="bg-red-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-red-700"><i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a  href="{{route('project.destroy',$project->id )}}" class="bg-green-500 text-white rounded-full h-6 w-3/4 shadow-2xl focus:bg-green-800"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td>Nenhum projeto encontrado</td>
                            </tr>
                    @endforelse
            </tbody>
            </table>
         </div>
        </div>
    </div>
</x-guest-layout>
