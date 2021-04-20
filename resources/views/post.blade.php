<div class="p-6 post">
    <div class="flex items-center">
        <div class="ml-4 text-lg leading-7 font-semibold">
            <a href="{{route('post', $post->id)}}" class="underline text-gray-900 dark:text-white">
                {{$post->title}}
            </a>
        </div>
        <div class="ml-4 text-lg leading-7 font-semibold">
            <a href="{{route('update', $post->id)}}" class="underline text-gray-900 dark:text-white">
                <i class="fa fa-pencil-scuare">edit</i>
            </a>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('destroy', $post->id)}}">@csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm" >Delete</button>
        </form>
    </div>

    <div class="ml-12">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            {{$post->text}}
        </div>
    </div>

</div>