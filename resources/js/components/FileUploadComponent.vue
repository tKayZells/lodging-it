<template>
    <form id="file_upload" method="POST" :action="action" enctype="multipart/form-data" @submit="OnFormSubmit">
        <slot>
         <!-- CSRF gets injected into this slot and other inputs if necessary -->
        </slot>
        <div class="flex flex-col-reverse md:grid md:grid-cols-4 md:gap-6 p-4 m-2">
            <div class="md:col-span-2 p-4 m-2 border rounded-md">
                <p v-if="files.length == 0" class="text-sm text-center text-gray-600">No files to upload</p>
                <ul>
                    <file-row-component v-for="(file, idx) in files" v-bind:key="idx" :idx="idx" :file="file" v-on:delete-file="OnDeleteFile"></file-row-component>
                </ul>
            </div>
            <div class="md:col-span-2 py-4 m-2">
                <div class="p-0">
                    <input ref="images" type="file" name="images[]" multiple class="hidden" @change="OnImagesChange" />
                    <a id="image_popup" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500 cursor-pointer" @click="ShowSelectImages">
                        <i class="far fa-folder-open mr-2"></i>
                        Select Files
                    </a>
                    <button type="submit" :disabled="isDisabled" class="disabled:opacity-50 px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease ml-2" :class="{ 'hover:bg-gray-500' : !isDisabled }">
                        Upload Files 
                        <i class="fas fa-cloud-upload-alt ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
import FileRowComponent from "./FileRowCommponent.vue";
  export default {
    props:[ "action" ],
    components : {
        FileRowComponent
    },
    data() {
        return {
            files: [],
            isDisabled : false
        }
    },
    methods: {
        OnImagesChange(e) {
            for (const file of e.target.files) {
                this.files.push(file);
            }
        },
        OnFormSubmit(e) {

            e.preventDefault();

            this.isDisabled = true;
            var fData = new FormData();
            const formInputs = document.querySelectorAll("form#file_upload > input");
            for ( const input of formInputs)
            {
                fData.append(input.name, input.value);
            }

            for ( const file of this.files)
            {
                fData.append("files[]", file);
            }
            
            fetch(this.action,{
                method: "POST",
                body: fData
            }).then( resp =>{
                console.log(resp);
                if( resp.status == 200 )
                {
                    location.reload();
                }
            }).catch( resp => {
                console.log(resp);
                this.isDisabled = false;
            });
            
        },
        ShowSelectImages(e) {
            if( this.isDisabled ) return;
            this.$refs.images.click();
        },
        OnDeleteFile( file, idx ){
            this.files.splice( idx, 1);
        }
    }
  };
</script>