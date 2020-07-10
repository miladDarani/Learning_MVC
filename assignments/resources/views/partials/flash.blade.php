  @if(session('error'))
    
    <div style="    height: 40px;
    /* font-weight: bold; */
    display: flex;
    justify-content: center;
    padding-top: 7px;" class="alert alert-danger">
        {{ session('error') }}
    </div>

  @endif

  @if(session('success'))
    
    <div style="    height: 40px;
    /* font-weight: bold; */
    display: flex;
    justify-content: center;
    padding-top: 7px;" class="success alert-success">
        {{ session('success') }}
    </div>

  @endif

  @if($errors->any())
    
    <div style="    height: 40px;
    /* font-weight: bold; */
    display: flex;
    justify-content: center;
    padding-top: 7px;" class="alert alert-danger">
      Please Review and correct form submission
    </div>

  @endif