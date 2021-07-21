<form action="('new_article',[articlecontroller::class,'savearticle'])" method="POST">
    @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Save</button>
            </div>



</form>

