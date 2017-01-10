<?php

class AdminAccount extends AbstractAccount {
    // Capabilities
    protected $canPublish = true;
    protected $canEditOtherUsersPosts = false;
    protected $canEditOwnPosts = true;
}


