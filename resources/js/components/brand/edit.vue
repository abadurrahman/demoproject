 <template>
  <div>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Brand</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Brand</a></li>
                            <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding:25px;margin-top:-5.5rem">
  <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Edit Brand</h3>
        </div>
        <!-- Card body -->
       
        <div class="card-body">
       <form @submit.prevent="brandUpdate" enctype="multipart/form-data">
          <!-- Form groups used in grid -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Brand Name*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Name" v-model="form.brand_name">
                <small class="text-danger" v-if="errors.brand_name">{{ errors.brand_name[0] }}</small>
              </div>
            </div> 
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Image*</label>
                <input type="file" class="form-control" id="example3cols1Input" @change="onFileselected" >
                <small class="text-danger" v-if="errors.photo">{{ errors.photo[0] }}</small>
              </div>
            </div> 
            <div class="col-md-6 " style="">
              <div class="form-group">                
                <div class="col-md-6">
                    <img :src="form.photo" style="height:40px; width: 40px; margin:30px;" >
                  </div>
              </div>
            </div> 
          </div>
          <button class="btn btn-primary" style="margin-top:15px;" type="submit">Update</button>
        </form>  
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
              brand_name :'',
              photo :'',
              newphoto:'',

            },
            errors:{},
          }
        },
        created(){
          let id = this.$route.params.id
          axios.get('/api/show-brand/'+id)
          .then(({data}) => (this.form = data))
          .catch()
        },
        methods:{   
          onFileselected(event){
            let file=event.target.files[0];
            if (file.size > 1048770) {
              Notification.image_validation()
            }else{
              let reader = new FileReader();
              reader.onload = event => {
                this.form.newphoto = event.target.result
              };
              reader.readAsDataURL(file);

            }
          },
          brandUpdate(){
            let id = this.$route.params.id
            axios.post('/api/update-brand/'+id,this.form)
            .then(() => {
              this.$router.push({ name: 'all-brand' })
              Notification.success()
            })
            .catch(error => this.errors = error.response.data.errors)
          },
          
        }

      
    }


  
</script>

<style>
  
#add_new{
  float: right;
}

</style>
