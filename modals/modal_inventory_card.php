    <!-- Bootstrap Modal for Inventory -->
    <div class="modal fade" id="inventoryModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black text-center w-100 fw-bold" id="exampleModalToggleLabel">Inventory</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Action Buttons -->
              <div class="d-flex  flex-column gap-2 mb-4">
                <button class="btn btn-success flex-fill" data-bs-target="#exampleModalToggle2"  data-bs-toggle="modal" data-bs-dismiss="modal" >Add Item</button>
                <button class="btn btn-primary flex-fill">Update Item</button>
              </div>
              <!-- Inventory Summary -->
              <h6 class="text-success">Items in Inventory: <span class="badge bg-secondary">42</span></h6>
              <hr> 
                              
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black fw-bold" id="exampleModalToggleLabel2">Add item</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Add Item Modal -->
              <form id="addItemForm">
                <div class="modal-body">
        
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Item Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Category</label>
                      <select class="form-select" required>
                        <option selected disabled>Choose category</option>
                        <option>Plate</option>
                        <option>Bowl</option>
                        <option>Mug</option>
                        <option>Glass</option>
                        <option>Cutlery</option>
                        <option>Set</option>
                      </select>
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Brand / Manufacturer</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Item Code / SKU</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <div class="col-md-4">
                      <label class="form-label">Purchase Price</label>
                      <input type="number" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label">Selling Price</label>
                      <input type="number" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label">Quantity in Stock</label>
                      <input type="number" class="form-control" required>
                    </div>
                  </div>
        
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label class="form-label">Unit Type</label>
                      <select class="form-select">
                        <option>Pieces</option>
                        <option>Sets</option>
                        <option>Dozens</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Upload Image</label>
                      <input class="form-control" type="file" accept="image/*">
                    </div>
                  </div>
        
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Optional..."></textarea>
                  </div>
        
                </div>
        
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Add Item</button>
                </div>
              </form>

            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#inventoryModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
            </div>
          </div>
        </div>
      </div>

