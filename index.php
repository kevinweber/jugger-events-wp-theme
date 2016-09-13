<?php
  // We don't need a home page because we only need the backend
  wp_redirect( get_admin_url() );
  exit;
?>