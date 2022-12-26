import Authenticated from "@/Layouts/Authenticated/Index";
import SubscribtionCard from "@/Components/SubscribtionCard";
import { Head } from "@inertiajs/inertia-react";

export default function SubcribtionPlan() {
    return (
        <Authenticated>
            <Head title="Payments" />
            <div className="py-20 flex flex-col items-center">
                <div className="text-black font-semibold text-[26px] mb-3">
                    Pricing for Everyone
                </div>
                <p className="text-base text-gray-1 leading-7 max-w-[302px] text-center">
                    Invest your little money to get a whole new experiences from
                    movies.
                </p>

                {/* <!-- Pricing Card --> */}
                <div className="flex justify-center gap-10 mt-[70px]">
                    {/* <!-- Basic --> */}
                    <SubscribtionCard
                        name="Basic"
                        price={299999}
                        durationMonth={3}
                        features={["Feature 1", "Feature 2", "Feature 3"]}
                    />

                    {/* <!-- For Greatest --> */}
                    <SubscribtionCard
                        isPremium
                        name="Premium"
                        price={599999}
                        durationMonth={8}
                        features={[
                            "Feature 1",
                            "Feature 2",
                            "Feature 3",
                            "Feature 4",
                            "Feature 5",
                            "Feature 6",
                            "Feature 7",
                        ]}
                    />
                </div>
                {/* <!-- /Pricing Card --> */}
            </div>
        </Authenticated>
    );
}
