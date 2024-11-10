                    <!-- Thông báo -->
                    @if (session('success'))
                        <div id="notification" class="alert alert-success">
                            {{ session('success') }}
                            <button type="button" class="close" onclick="closeNotification()">&times;</button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div id="notification" class="alert alert-danger">
                            {{ session('error') }}
                            <button type="button" class="close" onclick="closeNotification()">&times;</button>
                        </div>
                    @endif

                    @if (session('message'))
                        <div id="notification" class="alert alert-info">
                            {{ session('message') }}
                            <button type="button" class="close" onclick="closeNotification()">&times;</button>
                        </div>
                    @endif
                    <script>
                        // Display the notification and hide it after 5 seconds
                        document.addEventListener("DOMContentLoaded", function() {
                            const notification = document.getElementById("notification");

                            if (notification) {
                                // Show notification as a pop-up
                                notification.style.position = "fixed";
                                notification.style.top = "20px";
                                notification.style.right = "20px";
                                notification.style.zIndex = "1000";
                                notification.style.transition = "opacity 0.5s ease";

                                // Set a timeout to hide the notification after 5 seconds
                                setTimeout(() => {
                                    notification.style.opacity = "0";
                                    setTimeout(() => notification.remove(), 500); // Remove after fade out
                                }, 5000);
                            }
                        });

                        // Function to close the notification manually
                        function closeNotification() {
                            const notification = document.getElementById("notification");
                            if (notification) {
                                notification.style.opacity = "0";
                                setTimeout(() => notification.remove(), 500); // Remove after fade out
                            }
                        }
                    </script>
