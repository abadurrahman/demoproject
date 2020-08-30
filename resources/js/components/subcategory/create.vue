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
                                <td>1</td>
                                <td>hgh</td>
                                <td>cvcvbv</td>
                                <td>
                                    <a class="btn btn-sm btn-info" id="edit" href="">Edit</a>
                                    <form
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return(confirm('are you sure to delete?'))">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
            
           
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Category Name*</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Category Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Slug*</label>
                    <input type="text" id="name" name="slug" class="form-control @error('name') is-invalid @enderror" placeholder="Slug">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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




<!--  <template>
   <div>

     <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Electronic Section</span>
      </nav>
      <div class="sl-pagebody">
           <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Add SubCategory
          <router-link to="/all-subcategory" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">All SubCategory</router-link>
          </h6>

       <form @submit.prevent="subcategoryInsert">      
         <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">SubCategory Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" v-model="form.subcategory_name">
                  <small class="text-danger" v-if="errors.subcategory_name">{{ errors.subcategory_name[0] }}</small>
                </div>

             </div>

            </div>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel --> </div>
   

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
              subcategory_name:''
            },
            errors:{},
          }
        },

      methods:{
        subcategoryInsert(){
          axios.post('/api/subcategory',this.form)
          .then(() => {
            this.$router.push({ name: 'all-subcategory' })
            Notification.success()
          })
          .catch(error => this.errors = error.response.data.errors)
        },
      }  
}
</script>

<style type="text/css">
  
</style>
 -->