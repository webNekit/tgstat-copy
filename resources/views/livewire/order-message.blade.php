<ul class="intro__bottom-filter">
   <li class="intro__bottom-filterItem">
       <button class="intro__bottom-filterTarget" wire:click="setOrderBy('users')">
           По участникам <i class="ri-arrow-down-line"></i>
       </button>
   </li>
   <li class="intro__bottom-filterItem">
       <button class="intro__bottom-filterTarget" wire:click="setOrderBy('amount_messages')">
           По сообщениям <i class="ri-arrow-down-line"></i>
       </button>
   </li>
   <li class="intro__bottom-filterItem">
       <button class="intro__bottom-filterTarget" wire:click="setOrderBy('recent_subscriptions')">
           По активным участникам <i class="ri-arrow-down-line"></i>
       </button>
   </li>
</ul>
