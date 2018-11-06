<template>
    <div>
        <form @submit.prevent="storeFile">
            <div class="input-group">
                <input :value="getFilesName()" type="text" readonly class="form-control rounded-0" placeholder="Choose files">
                <div @click="openFilePicker" class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paperclip"></i></span>
                </div>
                <input hidden multiple @change="onChange" type="file" id="uploadFile">
            </div>

            <div hidden class="progress" style="height: 1px">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-2">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            files: []
        }
    },

    methods: {
        storeFile() {
            let formData = new FormData()

            for (const file of this.files) {
                formData.append('images[]', file, file.name)
            }

            axios.post('/image', formData)
                .then(res => (
                    this.files = [],
                    swal("Great...", "Files uploaded", "success")
                ))
                .catch(err => (
                    swal("Oops...", err, "error")
                ))
        },

        openFilePicker() {
            $('#uploadFile').click()
        },

        getFilesName(){
            let filesName = []

            if (this.files.length > 0) {
                for (let file of this.files) {
                    filesName.push(file.name)
                }
            }
            return filesName.join(", ")
        },

        onChange(event) {
            this.files = event.target.files
        }
    }
}
</script>
