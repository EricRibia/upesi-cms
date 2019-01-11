<template>

        <div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card" v-if="$gate.isAuthorOrAdmin()">
              <div class="card-header">
                <h3 class="card-title">Payments in countries</h3>

                <div class="card-tools">
                  <button class="btn btn-success" @click="newModal">Add payment<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>

              <paginate
                name="countries"
                :list="tasks"
                :per="10"
                >
                    <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>Type</th>
                    <th>Country</th>
                    <th>Payment logo</th>
                    <th>Payment info</th>
                  </tr>
                    <tr v-for="value in paginated('countries')"  :key="value.id">
                    <td>{{value.type}}</td>
                    <td>{{value.name}}</td>
                    <td>{{value.logo | summary}}</td>
                    <td>{{value.info}}</td>
                    <td>
                        <a href="#" @click="editModal(value)"><i class="fas fa-edit"></i></a>
                          /  
                        <a href="#" @click="deleteAbout(value.id)"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <!-- /.card-body -->
</paginate>
<paginate-links for="countries"></paginate-links>
            </div>
            <!-- /.card -->
            <!-- .notfound -->
             <div class="card">
            <!-- <notfound></notfound> -->
             </div>
            <!-- /.notfound -->
          </div>
          <!-- Modal -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Update payment</h5>
                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Create payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editMode ? updateAbout() : createAbout()">
                <div class="modal-body">
                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name"
                            placeholder="Enter name of country"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                    <select name="type" v-model="form.type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">>
                        <option value="Cash Pickup" selectd="selected">Cash Pickup.</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Mobile Wallets">Mobile Wallets</option>
                      </select>
                      <has-error :form="form" field="type"></has-error>
                    </div>
                    <div class="form-group">
                        <p name="logo">Upload payment logo(s)</p>
                        <input type="file" multiple @change="fieldChange" name="logo" class="form-input" id="inputFile">
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.info" type="text" name="description"
                            rows="3"
                            placeholder="Enter payment type info"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('info') }">
                        </textarea>
                        <has-error :form="form" field="info"></has-error>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                    <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
       
        </div>



</template>

<script>
export default {
    data(){
        return{
            editMode : false,
            tasks : [],
            paginate: ['countries'],
            form : new Form({
                id:'',
                name: '',
                type: '',
                logos:[],
                info:''
            }),
        }
    },
    filters: {
        summary: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.substr(0, 25) + '...';
        }
    },
    computed:{
        vals(){
            if(this.tasks){
            const newdata = this.tasks;
            return newdata;
            }
        }
    },
    methods:{
    fieldChange(e){
        console.log(e);
        let selectedfiles = e.target.files;
        if(!selectedfiles.length){
            return false;
        }
        for(let i = 0; i < selectedfiles.length; i++){
            this.form.logos.push(selectedfiles[i]);
        }
    },
    logoUpload(e){
        let file = e.target.files[0];
        let reader = new FileReader();
        if( file['size'] < 262144){
            reader.onloadend = (file) => {
            // console.log('Result', reader.result);
            this.form.logo =reader.result;
            }
            reader.readAsDataURL(file);
        }else{
            swal({
            type: 'error',
            title: 'Failed to upload',
            text: 'Image should be less than 2mbs',
            })
        }
    },
        photoUpload(e){
        let file = e.target.files[0];
        let reader = new FileReader();
        if( file['size'] < 262144){
            reader.onloadend = (file) => {
            // console.log('Result', reader.result);
            this.form.background =reader.result;
            }
            reader.readAsDataURL(file);
        }else{
            swal({
            type: 'error',
            title: 'Failed to upload',
            text: 'Image should be less than 2mbs',
            })
        }
    },
     newModal(){
        this.editMode = false;
        this.form.reset();
        this.form.clear();
        $('#addNew').modal('show');
                 
        },
    editModal(abtCont){
        this.editMode = true;
        this.form.reset();
        $('#addNew').modal('show');
        this.form.clear();
        this.form.fill(abtCont);
            
        },
    editModalTwo(abtCont){
        this.editMode = true;
        this.form.reset();
        $('#addNewTwo').modal('show');
        this.form.clear();
        this.form.fill(abtCont);
            
    },
     deleteAbout(id){
        swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.value){
                this.form.delete('api/payments/' + id)
                .then( () => {
                    swal(
                    'Deleted!',
                    'User has been deleted.',
                    'success'
                    )
                Fire.$emit('createNew');
                }).catch( () => {
                    swal({
                    type: 'error',
                    title: 'Failed',
                    text: 'Something went wrong!',
                    })
                });
            }
        })
        },
     updateAbout(){
            this.$Progress.start();
            this.form.put( 'api/payments/' + this.form.id)
            .then( () => {
                //success
                $('#addNew').modal('hide');
                $('#addNewTwo').modal('hide');
                swal(
                    'Updated!',
                    'User has been updated.',
                    'success'
                    )
                Fire.$emit('createNew');
                this.$Progress.finish();
            }).catch( () => {
                //fail
                this.$Progress.fail();
            });
        },
     createAbout(){
            this.$Progress.start();
            if(this.form.logos == ''){
             swal({
            type: 'error',
            title: 'Empty fields',
            text: 'Ensure you upload both logo and background image',
            })   
            }
            this.form.post('api/payments')
            .then( () => {
                $('#addNew').modal('hide');
                toast({
                    type: 'success',
                    title: 'User created successfully!!'
                    });
                Fire.$emit('createNew');
                this.$Progress.finish();
            }).catch( (response) => {
                swal({
                type: 'error',
                title: 'Unable to send',
                text: response,
                })  
            });
        },
    loadabout(){
        if(this.$gate.isAuthorOrAdmin())
        {
        axios.get('api/payments').then(( {data} ) => (this.tasks = data));
        }
        }
    },
    created(){
        this.loadabout();
        Fire.$on('createNew', () => this.loadabout() );    }
}
</script>
