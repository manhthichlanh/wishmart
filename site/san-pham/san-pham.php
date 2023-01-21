<div class="noidungchinh">
  <div class="sanpham_sp">
    <div class="locsp">
        <h2>Lọc</h2>
        <div class="boxlocsp dm">
            <?php
              if (isset($id_dm)) {
                echo '<h5>Danh mục</h5>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="dm_checked" checked value="'.$dm['id_dm'].'">
                  <label class="form-check-label" for="flexSwitchCheckChecked"><p>'.$dm['ten_dm'].'</p></label>
                </div>';
              }
            ?>
            
        </div>
        <div class="boxlocsp price_checked">
            <h5>Giá</h5>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked >
                <label class="form-check-label" for="flexSwitchCheckChecked"><p>Tất cả</p></label>
              </div>
            <?php 
              foreach ($khoang_gia as $key => $value) {
                $kq= '<div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" min="'.($value['lower']*1000000).'" max="'.($value['upper']*1000000).'">';
                if ($value["lower"]==0) {
                    $kq.='<label class="form-check-label" for="flexSwitchCheckChecked"><p>Dưới '.$value['upper'].' triệu</p></label>
                  </div>';
                } else if ($key==(count($khoang_gia)-1)) {
                  $kq.='<label class="form-check-label" for="flexSwitchCheckChecked"><p>Trên '.$value['upper'].' triệu</p></label>
                  </div>';
                }
                
                else {
                    $kq.='<label class="form-check-label" for="flexSwitchCheckChecked"><p>Từ '.$value['lower'].' đến '.$value['upper'].' triệu</p></label>
                  </div>';
                }
                echo $kq;

              }
              
            ?>
            
            <!-- <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" min="0" max="1000000">
              <label class="form-check-label" for="flexSwitchCheckChecked"><p>Dưới 1 triệu</p></label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" min="1000000" max="2000000">
              <label class="form-check-label" for="flexSwitchCheckChecked"><p>Từ 1 đến 2 triệu</p></label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" min="2000000" max="4000000">
              <label class="form-check-label" for="flexSwitchCheckChecked"><p>Từ 2 đến 4 triệu</p></label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" min="4000000" max="4000000">
              <label class="form-check-label" for="flexSwitchCheckChecked"><p>Từ 4 đến 6 triệu</p></label>
            </div> -->
        </div>
        <div class="boxlocsp rom_checked">
            <h5>Bộ nhớ</h5>
            <?php
              foreach (  $bo_nho as $item) {
                echo '<div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="'.$item['cau_hinh'].'">
                        <label class="form-check-label" for="flexSwitchCheckChecked"><p>'.$item['cau_hinh'].'</p></label>
                    </div>';
              }
            ?>
            
            <!-- <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
              <label class="form-check-label" for="flexSwitchCheckChecked"><p>128GB</p></label>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
              <label class="form-check-label" for="flexSwitchCheckChecked"><p>64GB</p></label>
            </div> -->
        </div>
        <div class="boxlocsp color_checked">
          <h5>Màu sắc</h5>
          <?php
              foreach ($mau_sac as $item) {
                  echo '<div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="'.$item['mau_sac'].'">
                          <label class="form-check-label" for="flexSwitchCheckChecked"><p>'.$item['mau_sac'].'</p></label>
                        </div>';
  
              }
            ?>
          <!-- <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked"><p>Vàng</p></label>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked"><p>Đỏ</p></label>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
            <label class="form-check-label" for="flexSwitchCheckChecked"><p>Trắng</p></label>
          </div> -->
      </div>
    </div>
    <div class="sanphamchinh">
      <div class="sapxep">
        <p>Sắp xếp theo:</p>
        <select class="option" name="sort">
          <option value="">Mặc định</option>
          <option value="ten_sp">Tên (A - Z)</option>
          <option value="ten_sp desc">Tên (Z - A)</option>
          <option value="don_gia">Giá (Thấp > Cao)</option>
          <option value="don_gia desc">Giá (Cao > Thấp)</option>
          <option value="so_luot_xem">Lượt xem (Cao nhất)</option>
          <option value="so_luot_xem desc">Lượt xem (Thấp nhất)</option>
          <!-- <option value="7">Dòng sản phẩm (A - Z)</option>
          <option value="8">Dòng sản phẩm (Z - A)</option> -->
          </select>
      </div>
    
      <div class="sanpham_sp1">
        <div class="place"></div>      
        <input type="submit" value="Xem thêm" class="add_more">  
      </div>

      
      
    </div>
  </div>
  </div>