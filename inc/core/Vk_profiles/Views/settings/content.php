<div class="card card-flush m-b-25">
    <div class="card-header">
        <div class="card-title flex-column">
            <h3 class="fw-bolder"><i class="<?php _ec( $config['icon'] )?>" style="color: <?php _ec( $config['color'] )?>;"></i> <?php _e('Vk API Configuration')?></h3>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <div class="alert alert-dismissible bg-light-primary border border-primary border-dashed d-flex flex-column flex-sm-row w-100 p-25 mb-10">
                <span class="fs-30 me-4 mb-5 mb-sm-0 text-primary">
                    <i class="fad fa-link"></i>
                </span>
                <div class="d-flex flex-column pe-0 pe-sm-10">
                    <h5 class="mb-1"><?php _e("Callback URL:")?></h5>
                    <span class="m-b-0"><?php _ec( base_url($config['id']) )?></span>

                    <h5 class="mb-1 mt-3"><?php _e("Click this link to create Vk app:")?></h5>
                    <span class="m-b-0"><a href="https://vk.com/editapp?act=create" target="_blank" >https://vk.com/editapp?act=create</a></span>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="vk_app_id" class="form-label"><?php _e('Vk app id')?></label>
            <input type="text" class="form-control form-control-solid" id="vk_app_id" name="vk_app_id" value="<?php _e( get_option("vk_app_id", "") )?>">
        </div>
        <div class="mb-3">
            <label for="vk_secure_secret" class="form-label"><?php _e('Vk secure key')?></label>
            <input type="text" class="form-control form-control-solid" id="vk_secure_secret" name="vk_secure_secret" value="<?php _e( get_option("vk_secure_secret", "") )?>">
        </div>
    </div>
</div>
