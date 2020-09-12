 <template>
  <div>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Blog</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active"><a href="#">Add</a></li>
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
          <h3 class="mb-0">Add Blog</h3>
        </div>
        <!-- Card body -->
       
        <div class="card-body">
       <form @submit.prevent="blogInsert">
          <!-- Form groups used in grid -->
       <div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Title*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Title" v-model="form.title">
                <small class="text-danger" v-if="errors.title">{{ errors.title[0] }}</small>
              </div>
            </div> 
             
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Date*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="Date" v-model="form.date">
                <small class="text-danger" v-if="errors.date">{{ errors.date[0] }}</small>
              </div>
            </div> 
            <div class="col-md-12">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Ditails*</label>
                <textarea type="text" class="form-control" id="example3cols1Input" placeholder="Text here....." v-model="form.details" style="height:100px;"></textarea>
                <small class="text-danger" v-if="errors.details">{{ errors.details[0] }}</small>
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
         </div> 
          <hr style="margin-top:-5px;">
         <div class="row">
          <div class="col-md-4" >
              <div class="form-group">
                <div class="custom-control custom-checkbox mb-3">
               <input class="custom-control-input" id="customCheck1" type="checkbox" v-model="main" value="1">
               <label class="custom-control-label" for="customCheck1">Main</label>
               </div>
              </div>
          </div> 
          <div class="col-md-4">
              <div class="form-group">
                <div class="custom-control custom-checkbox mb-3">
               <input class="custom-control-input" id="customCheck2" type="checkbox" v-model="latest" value="1">
               <label class="custom-control-label" for="customCheck2">Latest</label>
               </div>
              </div>
          </div>
          </div> 
          <button class="btn btn-primary" style="margin-top:15px;" type="submit">Save Brand</button>
        </form>  
        </div>
    </div>
</div>

 </div>
</template>


<script>

   /*import 'tui-editor/dist/tui-editor.css';
   import 'tui-editor/dist/tui-editor-contents.css';
   import 'codemirror/lib/codemirror.css';
   import { Editor } from '@toast-ui/vue-editor'*/

    export default {
      mounted(){
            if (!User.loggedIn()) {
               this.$router.push({ name:'admin' })
            } 
        },
        data(){
          return{
            form:{
              title :'',
              date:'',
              details:'',
              photo:'',
              main:'',
              latest:'',
            },
            errors:{},
          }
        },

      

        methods:{
        onFileselected(event){
            let file=event.target.files[0];
            if (file.size > 1048770) {
              Notification.image_validation()
            }else{
              let reader = new FileReader();
              reader.onload = event => {
                this.form.photo = event.target.result

                console.log(event.target.result);
              };
              reader.readAsDataURL(file);

            }
          },   
          blogInsert(){
            axios.post('/api/blog/',this.form)
            .then(() => {
              this.$router.push({ name: 'all-blog' })
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
