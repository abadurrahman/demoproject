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
<div style="padding:25px;margin-top:-5.5rem">
   <div class="card" style="padding:25px;">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Category</h3>
              <p class="text-sm mb-0">
              </p>
            </div>
            <div class="table-responsive py-4">
              <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable-basic_length"><label>Show <select name="datatable-basic_length" aria-controls="datatable-basic" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable-basic_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-basic"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-flush dataTable" id="datatable-basic" role="grid" aria-describedby="datatable-basic_info">
                <thead class="thead-light">
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 153px;">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 240px;">Createt At</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 93px;">Action</th>
                  </tr>
                </thead>
          
                <tbody>                 
                 <tr role="row" class="odd">
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>
                      <a class="btn btn-sm btn-info" href="">Edit</a>
                      <a class="btn btn-sm btn-danger" href="">Delete</a>
                    </td>
                 </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="datatable-basic_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
              </div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="datatable-basic_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="datatable-basic_previous">
                    <a href="#" aria-controls="datatable-basic" data-dt-idx="0" tabindex="0" class="page-link">
                      <i class="fas fa-angle-left"></i>
                    </a>
                  </li>
                  <li class="paginate_button page-item active">
                    <a href="#" aria-controls="datatable-basic" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                  </li>
                  <li class="paginate_button page-item next" id="datatable-basic_next">
                    <a href="#" aria-controls="datatable-basic" data-dt-idx="7" tabindex="0" class="page-link"><i class="fas fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
     </div>
  </div>
  <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Add Category</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Category Name*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Category Name">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example3cols2Input">Slug*</label>
                <input type="text" class="form-control" id="example3cols2Input" placeholder="Slug">
              </div>
            </div>            
          </div>
          <button class="btn btn-primary" style="margin-top:15px;" type="submit">Save Category</button>
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
