<template>
    <div>
        <form @submit.prevent="storeFile">
            <div class="custom-file rounded-0">
                <input @change="onChange" type="file" class="custom-file-input rounded-0" id="uploadFile">
                <label v-html="files.name" class="custom-file-label rounded-0" for="uploadFile"></label>
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
            formData.append('images', this.files)

            axios.post('/image', formData)
                .then(res => (
                    this.files = [],
                    swal("Great...", "Files uploaded", "success")
                ))
                .catch(err => (
                    swal("Oops...", err, "error")
                ))
        },

        onChange(event) {
            this.files = event.target.files[0]
        }
    }
}
</script>
