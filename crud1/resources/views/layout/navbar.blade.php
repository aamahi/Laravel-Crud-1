<nav class="navbar navbar-expand-lg navbar-dark bg-info">
<a class="navbar-brand" href="{{Route('home')}}">Crud Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse ml-1" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{Route('home')}}">Home</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{Route('create')}}">Add User</a>
            </li>
        </div>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>