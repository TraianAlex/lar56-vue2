<div class="card-header d-flex justify-content-between align-items-center">The G-machine
    <div class="form-check form-inline">
        <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="colorize"
                   @change="customBackground = ! customBackground">
            <label class="custom-control-label" for="colorize">Change background</label>
        </div>
        <div class="custom-control">
            <button class="btn btn-warning" @click="showModal = true">
                Inspiration click
            </button>
        </div>
    </div>
</div>