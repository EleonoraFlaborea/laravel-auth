
    @if($project->exists)
      <form action="{{ route('admin.projects.update', $project)}}" method="POST" novalidate>
        @method('PUT')
    @else
      <form action="{{ route('admin.projects.store', $project)}}" method="POST" novalidate>
    @endif
    
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                   <label for="title" class="form-label">Titolo</label>
                   <input type="text" class="form-control" id="title" placeholder="Titolo..." value="{{old('title', $project->title)}}" required>
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                   <label for="content" class="form-label">Contenuto del progetto</label>
                   <textarea class="form-control" id="content" rows="10" required>
                     {{old('content', $project->content)}}
                   </textarea>
                </div>
            </div>

           <div class="col-11">
                <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="url" class="form-control" name="image"id="image" value="{{old('image', $project->image)}}" placeholder="http:// o https://">
                </div>
           </div>


           <div class="col-11">
                <div class="mb-3">
                  <img src="{{old('image',$post->image ?? 'https://marcolanci.it/boolean/assets/placeholder.png')}}" class="img-fluid" alt="immagine project" id="preview">
                </div>
           </div>
           
        
        </div>
        


        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista</a> 

            <div class="d-flex align-items-center gap-2">
                <button type="reset" class="btn btn-secondary">
                  <i class="fas fa-eraser me-2"></i> 
                  Svuota i campi
                </button> 
                <button type="submit" class="btn btn-success">
                  <i class="fas fa-floppy-disk me-2"></i> 
                  Salva
                </button> 
            </div>
        </div>

     
    </form>