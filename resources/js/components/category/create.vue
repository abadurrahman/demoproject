 <template>
  <div>
    
    <div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Category</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active"><a href="#">List</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
<div class="row">
    <div class="col-xl-9 order-xl-2">
      <div class="card card-profile">
        <div class="card-body pt-0">
          <div class="row">
            <div class="card-body">
                <div class="card-header">
                    <h3 class="mb-0">Category</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" style="width: 100%;" id="datatable-buttons">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>hjbvj</td>
                                <td>hvjn</td>
                                <td>bv</td>
                                <td>
                                    <a class="btn btn-sm btn-info" id="edit" href="">Edit</a>
                                    <form action="" method="POST"
                                        style="display: inline-block;">
                                       
                                        <button type="submit" class="btn btn-sm btn-danger"
                                          >Delete</button>
                                    </form>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Add Category</h3>
            </div>
          </div>
        </div>
        <div class="card-body">
        <form>
           
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Category Name*</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Category Name">
                      
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Save Category</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</template>


<script>

    export default {
      mounted(){
            if (!User.loggedIn()) {
               this.$router.push({ name:'admin' })
            } 
        },
        data(){
          return{
            form:{
              category_name:''
            },
            errors:{},
          }
        },

      methods:{
        categoryInsert(){
          axios.post('/api/category',this.form)
          .then(() => {
            this.$router.push({ name: 'all-category' })
            Notification.success()
          })
          .catch(error => this.errors = error.response.data.errors)
        },
      }  
}
</script>

<style type="text/css">
  
</style>
