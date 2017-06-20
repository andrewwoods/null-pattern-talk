<?php

class AdminAccount extends UserAccount {
    // Capabilities
    protected $canPublish = true;
    protected $canEditOtherUsersPosts = false;
    protected $canEditOwnPosts = true;

}


