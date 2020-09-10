 <template>
 <div>
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Coupon</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Coupon</a></li>
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
              <h3 class="mb-0">Coupon</h3>
              <router-link to="/add-coupon" class="btn btn-sm btn-primary float-right">Add-Coupon</router-link>
              <p class="text-sm mb-0">
              </p>
            </div>
            <div class="table-responsive py-4">
              <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="datatable-basic_length">
                      <label>Show Data <!-- <select name="datatable-basic_length" aria-controls="datatable-basic" class="form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> --> entries</label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="datatable-basic_filter" class="dataTables_filter">
                      <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-basic" v-model="searchTerm"></label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
               <table class="table table-flush dataTable table table-hover" id="datatable-basic" role="grid" aria-describedby="datatable-basic_info">
                  <thead class="thead-light">
                   <tr role="row">
                     <th class="sorting_asc" style="width: 153px;">SL:</th>
                     <th class="sorting_asc" style="width: 153px;">Coupon Name:</th>
                     <th class="sorting_asc" style="width: 153px;">Discount:</th>
                     <th class="sorting_asc" style="width: 153px;">Created At:</th>
                     <th class="sorting_asc" style="width: 153px;">Action:</th>   </tr>
                   </thead>
          
                <tbody>                 
                 <tr role="row" class="odd" v-for="(coupon,index) in filtersearch" :key="coupon.id">
                    <td>{{index+1}}</td>
                    <td>{{ coupon.coupon_name }}</td>
                    <td>{{ coupon.discount }}</td>
                    <td>{{ coupon.created_at }}</td>
                    <td>
                      <router-link :to="{name: 'edit-coupon', params:{id: coupon.id} }" class="btn btn-sm btn-info" href="">Edit</router-link>
                      <a class="btn btn-sm btn-danger" style="color:white;" @click="deleteCoupon(coupon.id)">Delete</a>
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
                  <pagination
                v-if="pagination.last_page > 1"
                :pagination="pagination"
                :offset="5"
                @paginate="allCoupon()"
              ></pagination>
                </ul>
              </div>
            </div>
            
          </div>
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


        created(){
        this.allCoupon();
        },

        data(){
          return{
            coupons:[],
            searchTerm:'',
            pagination: {
            current_page: 1
          }         
          }
        },
       computed:{
         filtersearch(){
          return this.coupons.filter(coupon => {
             return coupon.coupon_name.match(this.searchTerm)
           })
         }
       },
        methods:{
          allCoupon(){
            axios.get("/api/all-coupon?page=" + this.pagination.current_page)
           .then(response => {
          this.coupons = response.data.data;
          this.pagination = response.data;
        })
         .catch()
          },

          deleteCoupon(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              axios.get('/api/delete-coupon/'+id)
              .then(()=>{
                 this.coupons = this.coupons.filter(coupon =>{
                    return coupon.id !=id
                 })
              })
              .catch(()=>{
                 this.$router.push({name: 'all-coupon'})
              })
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
           })
          }
        },
      
    }
     
  
  
</script>

<style type="text/css">
  
</style>
