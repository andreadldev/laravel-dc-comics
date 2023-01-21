<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header position-relative border-0">
                <h5 class="modal-title mx-auto"><i class="text-warning fs-1 fa-solid fa-circle-exclamation"></i></h5>
                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h3>Are you sure?</h3>
                <span class="text-secondary">Please confirm</span>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cancel</button>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger border-none fw-bold">Yes, delete</i></button>
                </form>
            </div>
        </div>
    </div>
</div>