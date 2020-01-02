<template>
    <div class="col-md-6 m-auto p-4">
        <form>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" v-model="username"  id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" v-model="phone"  id="phone" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success px-5" 
                    @click.prevent="submitHandle()"
                    >Submit</button>
            </div>
        </form>
    {{ username }}

            <!-- Text reverse -->
        <!-- <h4> {{message}} </h4>
        
         <button 
            class="btn btn-warning btn-sm px-5" 
            v-on:click="reversMessage()"
                    >Click</button>
            </div> -->


           
    </div>
</template>

<script>
 import axios from 'axios';
export default {
        data (){
            return  {
                username:'',
                phone:''
            }
        },
    methods: {
       
        submitHandle (){
          data:[
              name = this.username,
              phone = this.phone
          ]
          console.log(data);
        }
    }



//     data(){
//         return{
//            message:'Hello vue!', 
//         }
//     },
//    methods:{
//        submitHandle(){
//            let username = 'tushar'
//        alert(username)
//     },
//     reversMessage (){
//         this.message = this.message.split('').reverse().join('')
//         // alert(this.message);
//     }

//    } 


}
</script>