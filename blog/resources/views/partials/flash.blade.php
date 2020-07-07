  @if(session('error'))
    
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

  @endif

  @if(session('success'))
    
    <div class="success alert-success">
        {{ session('success') }}
    </div>

  @endif

  @if($errors->any())
    
    <div class="alert alert-danger">
      Please Review and correct form submission
    </div>

  @endif