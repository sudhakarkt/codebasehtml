<?php
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>
<!-- Side Menu -->
        <div class="right-side">
            <ul class="right-menu">
                <li <?php if($current_page === 'index.php'):?>class="active event-bg"<?php endif;?>><a href="index.php"><span class="menu-item">Event Details</span><span class="menu-icon"><img src="images/menu-icons/event-details.svg" /></span></a></li>
                <li <?php if($current_page === 'participating-teams.php'):?>class="active event-bg"<?php endif;?>><a href="participating-teams.php"><span class="menu-item">Participating Teams</span><span class="menu-icon"><img src="images/menu-icons/participating-teams.svg" /></span></a></li>
                <li <?php if($current_page === 'event-checklist-main.php'):?>class="active event-bg"<?php endif;?>><a href="event-checklist-main.php"><span class="menu-item">Event Check List</span><span class="menu-icon"><img src="images/menu-icons/event-check-list.svg" /></span></a></li>
                <li <?php if($current_page === 'team-allocation.php'):?>class="active event-bg"<?php endif;?>><a href="team-allocation.php"><span class="menu-item">Team Allocation</span><span class="menu-icon"><img src="images/menu-icons/team-allocation.svg" /></span></a></li>
                <li <?php if($current_page === 'zone-allocation.php'):?>class="active event-bg"<?php endif;?>><a href="zone-allocation.php"><span class="menu-item">Zone Allocation</span><span class="menu-icon"><img src="images/menu-icons/zone-allocation.svg" /></span></a></li>
                <li <?php if($current_page === 'itinerary-plan.php'):?>class="active event-bg"<?php endif;?>><a href="itinerary-plan.php"><span class="menu-item">Itinerary Plan</span><span class="menu-icon"><img src="images/menu-icons/itinerary-plan.svg" /></span></a></li>
                <li <?php if($current_page === 'steward-requested.php'):?>class="active event-bg"<?php endif;?>><a href="steward-requested.php"><span class="menu-item">Steward Requested</span><span class="menu-icon"><img src="images/menu-icons/steward-requested.svg" /></span></a></li>
                <li <?php if($current_page === 'briefing-document.php'):?>class="active event-bg"<?php endif;?>><a href="briefing-document.php"><span class="menu-item">Briefing Documents</span><span class="menu-icon"><img src="images/menu-icons/briefing-documents.svg" /></span></a></li>
                <li <?php if($current_page === 'event-peaps-rules.php'):?>class="active event-bg"<?php endif;?>><a href="event-peaps-rules.php"><span class="menu-item">Event PEAP's Rules</span><span class="menu-icon"><img src="images/menu-icons/event-PEAPs-rules.svg" /></span></a></li>
                <li <?php if($current_page === 'steward-management.php'):?>class="active event-bg"<?php endif;?>><a href="steward-management.php"><span class="menu-item">Steward Management</span><span class="menu-icon"><img src="images/menu-icons/steward-management.svg" /></span></a></li>
                <li <?php if($current_page === 'steward-allocation.php'):?>class="active event-bg"<?php endif;?>><a href="steward-allocation.php"><span class="menu-item">Steward Allocation</span><span class="menu-icon"><img src="images/menu-icons/steward-allocation.svg" /></span></a></li>
            </ul>
        </div>

        
