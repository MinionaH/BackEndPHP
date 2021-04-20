<div class="box box-primary">
        <div class="cox-header with-border">
            <h3 class="box-title">edit post</h3>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('update_save', $post->id)}}">
           @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post title</label>
                    <input type="Nano" class="form-control" placeholder="Nano" name="title" value="{{old('title', $post->title)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post text</label>
                    <input type="Nano" class="form-control" placeholder="Nano" name="text" value="{{old('text', $post->text)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post like</label>
                    <input type="number" class="form-control" placeholder="likes" name="likes" value="{{old('likes', $post->likes)}}">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">title
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>