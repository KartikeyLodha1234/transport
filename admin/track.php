<?php
include("includes/header.php");
?>
<div style="max-width: 1100px; margin: 0px auto; padding: 20px; font-family: sans-serif;">
    <div style="margin-bottom: 28px;">
        <h1 style="font-size: 26px; font-weight: bold; color: rgb(15, 23, 42); margin: 0px;">Real-Time Cargo Tracking
        </h1>
        <p style="font-size: 14px; color: rgb(100, 116, 139); margin: 4px 0px 0px;">Enter transport manifest or
            assignment credentials to scan active fleet coordinates.</p>
    </div>
    <div style="background-color: rgb(11, 19, 41); padding: 24px; border-radius: 16px; border: 1px solid rgb(30, 41, 59); margin-bottom: 32px;">
        <form style="display: flex; gap: 16px; flex-wrap: wrap; align-items: center;">
            <div style="flex: 1 1 300px; display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 11px; font-weight: 600; color: rgb(203, 213, 225); text-transform: uppercase; letter-spacing: 0.05em;">Shipment / Assignment ID</label>
                <input placeholder="e.g. SHP-1001 or ASN-9901" required="" type="text" value="" style="background-color: rgb(15, 23, 42); border: 1px solid rgb(51, 65, 85); padding: 12px 16px; border-radius: 10px; color: rgb(255, 255, 255); font-size: 14px; outline: none;">
            </div>
            <button type="submit" style="background-color: rgb(37, 99, 235); color: rgb(255, 255, 255); padding: 14px 28px; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 10px; font-size: 14px; font-weight: bold; cursor: pointer; margin-top: 23px; transition: background 0.2s;">🔍 Locate Freight</button>
        </form>
    </div>
</div>