<?php
include("includes/header.php");
?>
<div
    style="background-color: rgb(241, 245, 249); color: rgb(15, 23, 42); padding: 30px; min-height: 100vh; display: block; width: 100%;">
    <header style="border-bottom: 2px solid rgb(203, 213, 225); padding-bottom: 16px; margin-bottom: 24px;">
        <h1
            style="color: rgb(15, 23, 42); font-size: 28px; font-weight: 900; margin: 0px 0px 8px; display: flex; align-items: center; gap: 10px;">
            <span>⚠️</span> Exception &amp; Delayed Shipments</h1>
        <p style="color: rgb(71, 85, 105); font-size: 15px; font-weight: 600; margin: 0px;">Live tracking exception
            matrix</p>
    </header>
    <div
        style="background-color: rgb(255, 255, 255); border: 2px solid rgb(148, 163, 184); border-radius: 12px; padding: 16px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="background-color: rgb(226, 232, 240); border-bottom: 2px solid rgb(203, 213, 225);">
                    <th style="padding: 14px; color: rgb(30, 41, 59); font-weight: 800; font-size: 13px; text-transform: uppercase;">
                        Trip ID</th>
                    <th style="padding: 14px; color: rgb(30, 41, 59); font-weight: 800; font-size: 13px; text-transform: uppercase;">
                        Driver</th>
                    <th style="padding: 14px; color: rgb(30, 41, 59); font-weight: 800; font-size: 13px; text-transform: uppercase;">
                        Route Leg</th>
                    <th style="padding: 14px; color: rgb(30, 41, 59); font-weight: 800; font-size: 13px; text-transform: uppercase;">
                        Disruption Reason</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid rgb(226, 232, 240); background-color: rgb(255, 255, 255);">
                    <td style="padding: 16px; color: rgb(15, 23, 42); font-weight: 900; font-size: 15px;">TRK-9842</td>
                    <td style="padding: 16px; color: rgb(15, 23, 42); font-weight: 700; font-size: 14px;">Amit Singh
                    </td>
                    <td style="padding: 16px; color: rgb(51, 65, 85); font-weight: 700; font-size: 14px;">Jaipur →
                        Ahmedabad</td>
                    <td style="padding: 16px; color: rgb(220, 38, 38); font-weight: 800; font-size: 14px;">❌ Traffic
                        Congestion</td>
                </tr>
                <tr style="border-bottom: 1px solid rgb(226, 232, 240); background-color: rgb(248, 250, 252);">
                    <td style="padding: 16px; color: rgb(15, 23, 42); font-weight: 900; font-size: 15px;">TRK-9512</td>
                    <td style="padding: 16px; color: rgb(15, 23, 42); font-weight: 700; font-size: 14px;">Gopal Sharma
                    </td>
                    <td style="padding: 16px; color: rgb(51, 65, 85); font-weight: 700; font-size: 14px;">Mumbai Hub →
                        Udaipur</td>
                    <td style="padding: 16px; color: rgb(220, 38, 38); font-weight: 800; font-size: 14px;">❌ Heavy
                        Rainfall</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>